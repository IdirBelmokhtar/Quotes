<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\AtLeastOneNotNull\AtLeastOneNotNull;

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
             //'desc_ar' => [new \App\Rules\AtLeastOneNotNull('desc_en')]|,
            //'desc_en' => [new \App\Rules\AtLeastOneNotNull('desc_ar')],
            'desc_ar' => 'sometimes|string|max:300',
            'desc_en' => 'sometimes|string|max:300',
            'source_ar' => 'sometimes|string|max:50',
            'source_en' => 'sometimes|string|max:50',
            'created_by' => 'sometimes|integer|exists:users,id'
        ];
    }
}
