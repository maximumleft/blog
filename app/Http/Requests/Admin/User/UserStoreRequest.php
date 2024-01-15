<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'email' => 'required | email | unique:users',
            'role' => 'required | integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Это поле должно быть заполнено',
            'name.string' =>'Это поле должно быть строкой',
            'email.required' =>'Это поле должно быть заполнено',
            'email.email' =>'Это должна быть почта',
        ];
    }
}
