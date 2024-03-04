<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserRequest extends FormRequest
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
            'password' => 'required|string|confirmed|min:8',
            'email' => 'required|string|email|unique:users,email',
            'birth_date'=>'required|date_format : Y-m-d',
            'nationality'=>'required|string',
            'gender'=>['required', Rule::in(['male','female'])],
            'status'=>['required', Rule::in(['premuim'])],
            'type'=>['required', Rule::in(['client'])]
        ];
    }
}
