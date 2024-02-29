<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'sometimes|string',
            'logo' => 'sometimes|string',
            'is_free' => 'sometimes|boolean',
            'type' => 'sometimes|string|in:quote,theme',
            // 'categorible_type' => 'sometimes|nullable|string',
            // 'categorible_id' => 'sometimes|nullable|numeric',
            // 'created_by' => 'sometimes|nullable|numeric|exists:users,id',
        ];
    }
}
