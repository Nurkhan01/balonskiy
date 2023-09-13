<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MobilityRequest extends FormRequest
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
            'student_id' => ['required', 'integer'],
            'mobility_type_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'university_id' => ['required', 'integer'],
            'foreign_university_id' => ['required', 'integer'],
            'mobility_payment_type_id' => ['required', 'integer'],
            'agreement_type_id' => ['required', 'integer'],
            'mobility_start_date' => ['required', 'date'],
            'mobility_end_date' => ['required', 'date'],
            'payment_amount' => ['required', 'integer'],
            'taken_credits' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
