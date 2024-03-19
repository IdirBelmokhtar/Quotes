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
<<<<<<< HEAD
    {        
        $genders = ['male', 'female'];
        $status_ = ['free','premium'];
        $types = ['client'];

        return [
            'user_name' => 'sometimes|string|max:64|min:3',
            'email' => 'nullable|string|email|max:64|unique:users',
            'password' => 'nullable|string|min:8',
            'birth_date' =>'nullable|date',# |date:Y-m-d|  means Year-Month-Day  '1980-05-14'
            'nationality'=> 'nullable|string|max:64|min:3',
            'gender' => ['sometimes', Rule::in($genders)], // or 'gender' => 'required|string|in:man,female', # -> static method
            'status' =>  ['sometimes', Rule::in($status_)],
            'type' =>  ['sometimes', Rule::in($types)],
          
=======
    {
        return [
            'user_name' => 'sometimes|string',
            'email' => 'sometimes|string|email|unique:users,email',
            'birth_date' => 'sometimes|string|date:Y-m-d',
            'nationality'=> 'sometimes|string',
            'gender' => ['sometimes|string',Rule::in(['male','female'])],
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
            'category_id' => 'sometimes|numeric|exists:categories,id',
            'theme_id' => 'sometimes|numeric|exists:themes,id',
        ];
    }
}
