<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string',
            'logo' => 'required|string',
            'is_free' => 'required|boolean',
            'type' => 'required|string|in:quote,theme',
            'categorible_type' => 'nullable|string',
            'categorible_id' => 'nullable|integer',
            'created_by' => 'nullable|integer|exists:users,id',
        ];
    }
}
