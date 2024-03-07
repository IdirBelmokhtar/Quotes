<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
        $genders = ['male', 'female'];
        $status_ = ['free'];
        $types = ['client'];

        return [
            'user_name' => 'required|string|max:64|min:3',
            'email' => 'nullable|email|string|max:64|unique:users',
            'password' => 'nullable|string|min:8',
            'birth_date' =>'nullable|date', # |date:Y-m-d|  means Year-Month-Day  '1980-05-14'
            'nationality'=> 'nullable|string|max:64|min:3',
            'gender' => ['required', Rule::in($genders)], // or 'gender' => 'required|string|in:male,female', # -> static method
            'status' =>  ['required', Rule::in($status_)],
            'type' =>  ['required', Rule::in($types)],
            
            'category_id' => 'required|numeric|exists:categories,id',
            'theme_id' => 'required|numeric|exists:themes,id',
        ];
    }
}
