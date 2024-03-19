<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD
use Illuminate\Validation\Rule;
=======
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc

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
<<<<<<< HEAD
        $genders = ['male', 'female'];
        $status_ = ['premium'];
        $types = ['client'];

        return [
            'user_name' => 'required|string|max:64|min:3',
            'email' => 'required|string|email|max:64|unique:users',
            'password' => 'required|string|confirmed|min:8', //  confirmed : field named 'password_confirmation' in the request data. (Postman)
            'birth_date' => 'required|date',
            'nationality' => 'required|string',
            'gender' => ['required', Rule::in($genders)], // or 'gender' => 'required|string|in:male,female', # -> static method
            'status' =>  ['required', Rule::in($status_)],
            'type' =>  ['required', Rule::in($types)],
=======
        return [
            'user_name' => 'sometimes|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'birth_date' => 'sometimes|string|date:Y-m-d',
            'nationality'=> 'sometimes|string',
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
