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
<<<<<<< HEAD
            'desc_ar' => 'nullable|string|max:255',
            'desc_en' => 'nullable|string|max:255',
            'source_ar' => 'nullable|string|max:64|',
            'source_en' => 'nullable|string|max:64',
            'category_id' => 'required|numeric|exists:categories,id',
            // 'created_by' => 'required|numeric|exists:users,id',
=======
            'desc_ar' => 'required|string',
            'desc_en' => 'required|string',
            'source_ar' => 'required|string',
            'source_en' => 'required|string',
            'category_id'=> 'required|numeric|exists:categories,id',
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
