<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required'],
            'eamil' => ['required'],
            'password' => ['required'],
            'role' => ['required'],
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'You should add Name',
            'email.required' => 'You should add Email',
            'password.required' => 'You should add Password',
            'role.required' => 'You should add Role',
        ];
    }
}
