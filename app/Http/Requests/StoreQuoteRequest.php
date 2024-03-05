<?php

namespace App\Http\Requests;
// use \app\Requests\AtLeastOneNotNullClass\AtLeastOneNotNull;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'desc_ar' => 'sometimes|string|max:300',
            'desc_en' => 'sometimes|string|max:300',
            'source_ar' => 'sometimes|string|max:50',
            'category_id'=>'sometimes|exists:categories,id',
            'source_en' => 'sometimes|string|max:50'

        ];
    }
}
