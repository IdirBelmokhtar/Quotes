<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateThemeRequest extends FormRequest
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
<<<<<<< HEAD
            'font' => 'sometimes|string',
            'image' => 'sometimes|image|mimes:jpg,png,jpeg',
            'is_free' => 'sometimes|boolean',
            'category_id' => 'sometimes|numeric|exists:categories,id',
            // 'created_by' => 'sometimes|nullable|numeric|exists:users,id',
=======
            'font_ar' => 'sometimes|string',
            'font_en' => 'sometimes|string',
            'image' => 'sometimes|image',
            'is_free' => 'sometimes|boolean',
            'category_id'=> 'sometimes|numeric|exists:categories,id',
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
