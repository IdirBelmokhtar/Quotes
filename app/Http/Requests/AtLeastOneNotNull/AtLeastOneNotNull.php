<?php
namespace App\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class AtLeastOneNotNull implements Rule
{
    private $otherField;

    public function __construct($otherField)
    {
        $this->otherField = $otherField;
    }

    public function passes($attribute, $value)
    {
        $otherValue = request()->get($this->otherField);

        // If both fields are null, validation fails
        if (is_null($value) && is_null($otherValue)) {
            return false;
        }

        // If at least one field is not null, validation passes
        return true;
    }

    public function message()
    {
        return 'At least one of the fields must be filled.';
    }
}