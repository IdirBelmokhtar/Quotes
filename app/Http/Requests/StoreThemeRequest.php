<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreThemeRequest extends FormRequest
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
            'font_en'=>'required|string|max:50',
            'font_ar'=>'required|string|max:50',
            'image'=>'sometimes|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'is_free'=>'required|boolean'
        ];
    }
}
