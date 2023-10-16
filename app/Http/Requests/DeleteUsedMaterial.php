<?php

namespace App\Http\Requests;

use App\Base\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class DeleteUsedMaterial extends BaseRequest
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
        return [];
    }

    public function fulfill(): mixed
    {
        try {
            return DB::transaction(fn () => $this->process());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    protected function process(): bool
    {
        $usedMaterial = $this->route('material_terpakai');
        $usedMaterial->load('materials');

        foreach ($usedMaterial->materials as $material) {
            $currStock = (int) $material->in_stock;
            $stockRemain = $currStock + (int) $material->pivot->quantity;
            $usedMaterial->materials()->detach($material->id);

            if ($stockRemain < 0) {
                abort(400, $material->name . ' Stock tidak mencukupi');
            }

            $material->in_stock = $stockRemain;
            $material->save();
        }

        return $usedMaterial->delete();
    }
}
