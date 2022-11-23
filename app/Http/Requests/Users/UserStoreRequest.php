<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users,email',
            'role_id'  => 'required|integer',
            'password' => 'required|min:6',
        ];
    }

    public function attributes(): array
    {
        return [
            'name'     => 'Логин',
            'email'    => 'Почта',
            'role_id'  => 'Роль',
            'password' => 'Пароль',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле ":attribute" обязательно для заполнения',
            'unique'   => 'Данная ":attribute" занята',
            'min'      => 'Минимальная длина пароль :min символов',
        ];
    }
}
