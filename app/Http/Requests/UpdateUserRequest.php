<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $genders = ['male', 'woman'];
        $status_ = ['free','premium'];
        $types = ['client'];

        return [
            'user_name' => 'sometimes|string|max:64|min:3',
            'email' => 'nullable|string|email|max:64|unique:users',
            'password' => 'nullable|string|min:8',
            'birth_date' =>'nullable|date',# |date:Y-m-d|  means Year-Month-Day  '1980-05-14'
            'nationality'=> 'nullable|string|max:64|min:3',
            'gender' => ['sometimes', Rule::in($genders)], // or 'gender' => 'required|string|in:man,woman', # -> static method
            'status' =>  ['sometimes', Rule::in($status_)],
            'type' =>  ['sometimes', Rule::in($types)],
          
            'category_id' => 'sometimes|numeric|exists:categories,id',
            'theme_id' => 'sometimes|numeric|exists:themes,id',
        ];
    }
}
