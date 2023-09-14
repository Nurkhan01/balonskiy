<?php

namespace App\Http\Requests\Building;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BuildingRequest extends FormRequest
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
            'type' => ['required', 'string'],
            'expluatation_start_year' => ['required', 'integer'],
            'total_area' => ['required', 'integer'],
            'classroom_area' => ['required', 'integer'],
            'non_classroom_area' => ['required', 'integer'],
        ];
    }
    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
