<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',

        ];
    }

    public function messages()
    {
        return [
            'title.required'  => 'Это поле необходимо для заполнения',
            'title.string'  => 'Данные должны соответствовать строчному типу',
            'content.required'  => 'Это поле необходимо для заполнения',
            'content.string'  => 'Данные должны соответствовать строчному типу',
            'preview_image.required'  => 'Это поле необходимо для заполнения',
            'preview_image.file'  => 'Необходимо выбрать файл',
            'main_image.required'  => 'Это поле необходимо для заполнения',
            'main_image.file'  => 'Необходимо выбрать файл',
            'category_id.required'  => 'Это поле необходимо для заполнения',
            'category_id.integer'  => 'ID категории должен быть числом',
            'category_id.exists'  => 'Категория должна существовать',
            'tags_ids.array'  => 'необходимо отправить массив данных',
        ];
    }
}
