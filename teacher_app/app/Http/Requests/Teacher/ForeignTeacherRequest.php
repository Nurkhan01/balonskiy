<?php

namespace App\Http\Requests\Teacher;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ForeignTeacherRequest extends FormRequest
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
            'teacher_id' => ['required', 'integer'],
            'foreign_university_id' => ['required', 'integer'],
            'teacher_financing_type_id' => ['required', 'integer'],
            'financing_sum' => ['required', 'integer'],
            'is_in_qswur' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'lecture_hours_count' => ['required', 'integer'],
            'seminar_hours_count' => ['required', 'integer'],
            'masterclass_hours_count' => ['required', 'integer'],
            'training_hours_count' => ['required', 'integer'],
            'credits_count' => ['required', 'integer'],
            'ects_credits_count' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
