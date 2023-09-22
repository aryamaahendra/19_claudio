<?php

namespace App\Http\Requests;

use App\Base\BaseRequest;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class CreateSupplier extends FormRequest
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
            'email' => ['required', 'string', 'max:64'],
            'phone' => ['required', 'string', 'max:16'],
            'address' => ['required', 'string'],
        ];
    }

    public function fulfill(): mixed
    {
        $input = $this->validated();
        try {
            return DB::transaction(
                fn () => Supplier::create($input)
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
