<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
            'desc_ar' => 'nullable|string|max:255',
            'desc_en' => 'nullable|string|max:255',
            'source_ar' => 'nullable|string|max:64|',
            'source_en' => 'nullable|string|max:64',
            'category_id' => 'required|numeric|exists:categories,id',
            'created_by' => 'required|numeric|exists:users,id',
        ];
    }
}
