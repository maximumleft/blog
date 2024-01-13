<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title' => 'required | string',
            'content' => 'required | string',
            'preview_image' => 'nullable | file',
            'main_image' => 'nullable | file',
            'category_id' => 'nullable | integer | exists:categories,id',
            'tag_ids' => 'nullable | array',
            'tag_ids.*' => 'nullable | integer | exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'Это поле должно быть заполнено',
            'title.string' =>'Это поле должно быть строкой',
            'content.required' =>'Это поле должно быть заполнено',
            'content.string' =>'Это поле должно быть строкой',
            'preview_image.file' =>'Необходимо выбрать файл',
            'main_image.file' =>'Необходимо выбрать файл',
        ];
    }
}
