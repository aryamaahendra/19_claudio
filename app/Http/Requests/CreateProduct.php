<?php

namespace App\Http\Requests;

use App\Base\BaseRequest;
use App\Helpers\UnitMeasureEnum;
use App\Models\Product;
use App\Models\ProductMaterial;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CreateProduct extends BaseRequest
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
            'code' => ['required', 'string', 'max:32'],
            'name' => ['required', 'string', 'max:64'],
            'unit_measure' => ['required', 'string', Rule::in(UnitMeasureEnum::all())],
            'materials' => ['array'],
            'materials.*' => ['numeric'],
            'meterial_used' => ['array'],
            'meterial_used.*' => ['numeric'],
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

    protected function process(array $input): Product
    {
        $product = Product::create($input);

        foreach ($input['materials'] as $id) {
            $material = ProductMaterial::findOrFail($id);

            $product->materials()->attach($material->id, [
                'material_used' => $input['meterial_used'][$id]
            ]);
        }

        return $product;
    }
}
