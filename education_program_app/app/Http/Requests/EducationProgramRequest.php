<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EducationProgramRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'department_id' => ['required', 'integer'],
            'language_id' => ['required', 'integer'],
            'code' => ['required', 'string'],
            'study_level_id' => ['required', 'integer'],
            'education_field_id' => ['required', 'integer'],
            'is_inclusive_study' => ['required', 'boolean'],
            'professional_standard_id' => ['required', 'integer'],
            'registration_date' => ['required', 'string'],
            'type' => ['required', 'string'],
            'credits' => ['required', 'string'],
            'education_direction_id' => ['required', 'integer'],
            'education_group_id' => ['required', 'integer'],
            'is_non_formal' => ['required', 'integer'],
            'recognizes_previous_nonformal_education' => ['required', 'integer'],
            'university_representation_id' => ['required', 'integer'],
            'is_joint' => ['required', 'integer'],
            'is_remote' => ['required', 'integer'],
            'is_50_20_30_program' => ['required', 'integer'],
            'is_in_reestr' => ['required', 'integer'],
            'is_enc_program' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
