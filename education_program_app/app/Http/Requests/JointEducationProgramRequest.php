<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class JointEducationProgramRequest extends FormRequest
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
            'education_program_id' => ['required', 'integer'],
            'main_university_id' => ['required', 'integer'],
            'partner_university_id' => ['required', 'integer'],
            'foreign_partner_university_id' => ['required', 'integer'],
            'contract_start_date' => ['required', 'date'],
            'contract_end_date' => ['required', 'date'],
            'joint_ep_financing_source_id' => ['required', 'integer'],
            'graduate_document_type_id' => ['required', 'integer'],
            'interaction_problems' => ['required', 'string'],
            'problem_solving_suggestions' => ['required', 'string'],
            'is_double_diploma' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
