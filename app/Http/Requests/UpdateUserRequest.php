<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

/*
Validator::extend('dimensions_max', function ($attribute, $value, $parameters, $validator) {
    list($width, $height) = getimagesize($value);
    return $width <= $parameters[0] && $height <= $parameters[1];
});
*/

class UpdateUserRequest extends FormRequest
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
            'user_name'=>'sometimes|string',
            'email'=>'sometimes|email|unique:users,email',
            'password'=>'sometimes|string|min : 8',
            'birth_date'=>'sometimes|date_format : Y-m-d',
            'nationality'=>'sometimes|string',
            'gender'=>['sometimes', Rule::in(['male','female'])],
            'status'=>'sometimes|string', 
            'type'=>'sometimes|string'
        ];
    }
}
