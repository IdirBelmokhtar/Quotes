<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'user_name' => 'sometimes|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'birth_date' => 'sometimes|string|date:Y-m-d',
            'nationality'=> 'sometimes|string',
        ];
    }
}
