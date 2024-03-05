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

class StoreCategoryRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'logo'=>'sometimes|image|mimes:jpg,jpeg,png,gif,svg',
            'is_free'=>'sometimes|boolean',
            'type'=>['required'|'string'|Rule::in(['quote','theme'])],

        ];
    }
}
