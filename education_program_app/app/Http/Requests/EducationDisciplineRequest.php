<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EducationDisciplineRequest extends FormRequest
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
            'credit' => ['required', 'integer'],
            'department_id' => ['required', 'integer'],
            'code' => ['required', 'string'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'knowledge' => ['required', 'string'],
            'abilities' => ['required', 'string'],
            'recommendation' => ['required', 'string'],
            'study_level_id' => ['required', 'integer'],
            'education_language' => ['required', 'string'],
            'is_thread' => ['required', 'integer'],
            'is_selectable' => ['required', 'integer'],
            'need_computer' => ['required', 'integer'],
            'is_multilanguage' => ['required', 'integer'],
            'is_kazakh' => ['required', 'integer'],
            'is_russian' => ['required', 'integer'],
            'is_remote' => ['required', 'integer'],
            'is_not_remote' => ['required', 'integer'],
            'is_mook' => ['required', 'integer'],
            'mook_platform_name' => ['required', 'string'],
            'mook_cource_duration' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
