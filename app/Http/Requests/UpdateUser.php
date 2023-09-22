<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use App\Base\BaseRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UpdateUser extends CreateUser
{
    use PasswordValidationRules;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $user = $this->route('user');
        $rules = Arr::except(parent::rules(), 'password');
        $rules['email'] = [
            'required', 'string', 'email', 'max:255',
            Rule::unique(User::class)->ignore($user->id),
        ];

        return $rules;
    }

    public function fulfill(): mixed
    {
        $user = $this->route('user');
        $input = $this->validated();

        try {
            DB::transaction(
                fn () =>  User::find($user->id)->update($input)
            );

            return $user->refresh();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
