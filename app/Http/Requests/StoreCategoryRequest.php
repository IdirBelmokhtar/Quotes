<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< HEAD

class StoreCategoryRequest extends FormRequest
=======
use Illuminate\Validation\Rule;

<<<<<<<< HEAD:app/Http/Requests/StoreThemeRequest.php
class StoreThemeRequest extends FormRequest
========
class StoreCategoryRequest extends FormRequest
>>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc:app/Http/Requests/StoreCategoryRequest.php
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
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
            'name' => 'sometimes|string',
            'logo' => 'sometimes|string',
            'is_free' => 'sometimes|boolean',
            'type' => 'sometimes|string|in:quote,theme',
            // 'categorible_type' => 'sometimes|nullable|string',
            // 'categorible_id' => 'sometimes|nullable|numeric',
            // 'created_by' => 'sometimes|nullable|numeric|exists:users,id',
=======
<<<<<<<< HEAD:app/Http/Requests/StoreThemeRequest.php
            'font' => 'required|string',
            'image' => 'required|string|image|mimes:jpg,png,jpeg',
            'is_free' => 'required|boolean',
            'category_id' => 'required|numeric|exists:categories,id',
            // 'created_by' => 'nullable|numeric|exists:users,id',
========
            'name' => 'required|string',
            'logo' => 'required|image',
            'type' => ['required','string',Rule::in(['quote','theme'])],
            'is_free' => 'required|boolean'
>>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc:app/Http/Requests/StoreCategoryRequest.php
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
