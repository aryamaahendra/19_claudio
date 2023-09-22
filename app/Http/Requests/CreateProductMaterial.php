<?php

namespace App\Http\Requests;

use App\Models\ProductMaterial as Model;
use App\Base\BaseRequest;
use App\Helpers\UnitMeasureEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CreateProductMaterial extends BaseRequest
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
            'supplier_id' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function fulfill(): mixed
    {
        try {
            $input = $this->validated();
            return DB::transaction(fn () => Model::create($input));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
