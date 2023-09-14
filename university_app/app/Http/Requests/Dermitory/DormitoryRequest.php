<?php

namespace App\Http\Requests\Dermitory;

use Dotenv\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DormitoryRequest extends FormRequest
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
            'dormitory_type_id' => ['required', 'integer'],
            'expluatation_start_year' => ['required', 'integer'],
            'area' => ['required', 'integer'],
            'payment_per_month' => ['required', 'integer'],
            'payment_per_year' => ['required', 'integer'],
        ];
    }
    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => 'The given data was invalid.', 'errors' => $validator->errors(),], 422));
    }
}
