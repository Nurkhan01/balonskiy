<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormationEducationProgramRequest extends FormRequest
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
            'education_module_id' => ['required', 'integer'],
            'education_program_id' => ['required', 'integer'],
            'goso_cycle_name_id' => ['required', 'integer'],
            'education_discipline_id' => ['required', 'integer'],
            'goso_component_name_id' => ['required', 'integer'],
            'credit' => ['required', 'integer'],
            'is_cv' => ['required', 'integer'],
            'f_group_id' => ['required', 'integer'],
            'is_confirmed' => ['required', 'integer'],
            'component_status' => ['required', 'integer'],
            'is_minor' => ['required', 'integer'],
            'minor_f_group_id' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
