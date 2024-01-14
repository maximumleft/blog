<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | string',
            'password' => 'nullable | string',
            'email' => 'nullable | email | unique:users,email,' . $this->user_id,
            'user_id' => 'required | integer | exists:users,id',
            'role' => 'nullable | integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Это поле должно быть заполнено',
            'name.string' =>'Это поле должно быть строкой',
            'password.required' =>'Это поле должно быть заполнено',
            'password.string' =>'Это поле должно быть строкой',
            'email.required' =>'Это поле должно быть заполнено',
            'email.email'  =>'Это должна быть почта',
            'email.unique' =>'Данная почта уже зарегистрирована',
        ];
    }

}
