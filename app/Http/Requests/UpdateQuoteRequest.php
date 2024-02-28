<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
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
            'desc_ar' => 'sometimes|text',
            'desc_en' => 'sometimes|text',
            'source_ar' => 'sometimes|string',
            'source_en' => 'sometimes|string',
            'category_id'=> 'sometimes|numeric|exists:categories,id',
        ];
    }
}
