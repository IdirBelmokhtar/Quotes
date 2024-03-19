<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD
=======
use Illuminate\Validation\Rule;
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc

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
<<<<<<< HEAD
            'name' => 'required|string',
            'logo' => 'required|string',
            'is_free' => 'required|boolean',
            'type' => 'required|string|in:quote,theme',
            // 'categorible_type' => 'nullable|string',
            // 'categorible_id' => 'nullable|integer',
            // 'created_by' => 'nullable|integer|exists:users,id',
=======
            'name' => 'sometimes|string',
            'logo' => 'sometimes|image',
            'type' => ['sometimes','string',Rule::in(['quote','theme'])],
            'is_free' => 'sometimes|boolean'
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
