<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TeacherDataRequest extends FormRequest
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
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name_eng' => ['required', 'string'],
            'first_name_eng' => ['required', 'string'],
            'education_field_id' => ['required', 'integer'],
            'citizenship_id' => ['required', 'integer'],
            'degree_id' => ['required', 'integer'],
            'teaches_remote_courses' => ['required', 'integer'],
            'teaches_non_formal_courses' => ['required', 'integer'],
            'is_foreign' => ['required', 'integer'],
            'birth_date' => ['required', 'date'],
            'has_ielts_toefl' => ['required', 'integer'],
            'english_level_id' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
