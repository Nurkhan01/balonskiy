<?php

namespace App\Http\Requests\SpecialNeedsCondition;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SpecialNeedsConditionRequest extends FormRequest
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
            'university_id' => ['required', 'integer'],
            'entrance_count' => ['required', 'integer'],
            'sanitary_facilities_count' => ['required', 'integer'],
            'help_button_count' => ['required', 'integer'],
            'has_ramps__or_lifts' => ['required', 'integer'],
            'has_stairs_with_handrails' => ['required', 'integer'],
            'has_special_parkings' => ['required', 'integer'],
            'has_navigation_means' => ['required', 'integer'],
            'has_stairs_constrast_color' => ['required', 'integer'],
        ];
    }

    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
