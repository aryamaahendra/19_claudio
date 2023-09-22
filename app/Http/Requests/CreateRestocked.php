<?php

namespace App\Http\Requests;

use App\Base\BaseRequest;
use App\Models\ProductMaterial;
use App\Models\Restocked;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class CreateRestocked extends BaseRequest
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
            'quantity.*' => ['required', 'numeric', 'min:1'],
            'unit_price' => ['required', 'array', 'min:1'],
            'unit_price.*' => ['required', 'numeric', 'min:0'],
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

    protected function process(array $input): Restocked
    {
        $restocked = Restocked::create([
            'code' => 'RSTK-' . Carbon::now()->timestamp,
            'date' => Carbon::create($input['date']),
        ]);

        foreach ($input['materials'] as $id) {
            $material = ProductMaterial::findOrFail($id);
            $currStock = (int) $material->in_stock;

            $restocked->materials()->attach($material->id, [
                'quantity' => $input['quantity'][$id],
                'unit_price' => $input['unit_price'][$id],
                'total_price' => (int) $input['quantity'][$id] * (int) $input['unit_price'][$id],
            ]);

            $material->in_stock = $currStock + (int) $input['quantity'][$id];
            $material->save();
        }

        return $restocked;
    }
}
