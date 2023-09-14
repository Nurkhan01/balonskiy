<?php

namespace App\Http\Requests\Student\Employment;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmploymentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'working_start_date'=>['required', 'date'],
            'working_end_date'=>['required', 'date'],
        ];
    }
    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
