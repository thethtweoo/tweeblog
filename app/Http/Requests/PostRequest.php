<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            'category_id' => ['required'],
            'user_id' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'You should add Title',
            'image.required' => 'You should add Image',
        ];
    }
}
