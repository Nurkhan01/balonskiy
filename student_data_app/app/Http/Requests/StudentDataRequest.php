<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StudentDataRequest extends FormRequest
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
            'IID' => ['required', 'string'],
            'gender' => ['required', 'integer'],
            'student_location_type_id' => ['required', 'integer'],
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name_eng' => ['required', 'string'],
            'first_name_eng' => ['required', 'string'],
            'education_program_id' => ['required', 'integer'],
            'enroll_status_id' => ['required', 'integer'],
            'study_course' => ['required', 'integer'],
            'enter_year' => ['required', 'integer'],
            'graduate_year' => ['required', 'integer'],
            'payment_type_id' => ['required', 'integer'],
            'study_form_id' => ['required', 'integer'],
            'is_need_dormitory' => ['required', 'integer'],
            'employment_status_id' => ['required', 'integer'],
            'after_graduation_status' => ['required', 'integer'],
            'sports_category_id' => ['required', 'integer'],
            'has_special_needs' => ['required', 'integer'],
            'nationality_id' => ['required', 'integer'],
            'disability_category_id' => ['required', 'integer'],
            'is_online_study' => ['required', 'integer'],
            'has_ielts_toefl' => ['required', 'integer'],
            'english_level_id' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
