<?php

namespace App\Http\Requests\University;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UniversityRequest extends FormRequest
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
            'city_id' => ['required', 'integer'],
            'computers_count' => ['required', 'integer'],
            'internet_points_number' => ['required', 'integer'],
            'internet_speed' => ['required', 'integer'],
            'intercollegiate_library_access' => ['required', 'integer'],
            'total_grant_funding' => ['required', 'integer'],
            'email' => ['required', 'string'],
            'has_corporate_governance_bodies' => ['required', 'integer'],
            'science_funding_amount' => ['required', 'integer'],
            'science_funding_type_id' => ['required', 'integer']
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
