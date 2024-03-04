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
        return [
            'user_name'=>'sometimes|string',
            'birth_date'=>'sometimes|date_format : Y-m-d',
            'nationality'=>'sometimes|string',
            'gender'=>['required', Rule::in(['male','female','Prefered not to say'])],
            'type'=>['required', Rule::in(['client'])]
        ];
    }
}
