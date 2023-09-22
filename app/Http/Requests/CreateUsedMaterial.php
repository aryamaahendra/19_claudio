<?php

namespace App\Http\Requests;

use App\Base\BaseRequest;
use App\Models\ProductMaterial;
use App\Models\UsedMaterial;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class CreateUsedMaterial extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'date' => ['required', 'date'],
            'materials' => ['required', 'array', 'min:1'],
            'materials.*' => ['required', 'numeric', 'min:1'],
            'quantity' => ['required', 'array', 'min:1'],
            'quantity.*' => ['required', 'numeric', 'min:0'],
        ];
    }

    public function fulfill(): mixed
    {
        try {
            $input = $this->validated();
            return DB::transaction(fn () => $this->process($input));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    protected function process(array $input): UsedMaterial
    {
        $usedMaterial = UsedMaterial::create([
            'code' => 'USML-' . Carbon::now()->timestamp,
            'date' => Carbon::create($input['date']),
        ]);

        foreach ($input['materials'] as $id) {
            $material = ProductMaterial::findOrFail($id);
            $currStock = (int) $material->in_stock;
            $stockRemain = $currStock - (int) $input['quantity'][$id];

            if ($stockRemain < 0) {
                abort(400, $material->name . ' Stock tidak mencukupi');
            }

            $usedMaterial->materials()->attach($material->id, [
                'quantity' => $input['quantity'][$id],
            ]);

            $material->in_stock = $stockRemain;
            $material->save();
        }

        return $usedMaterial;
    }
}
