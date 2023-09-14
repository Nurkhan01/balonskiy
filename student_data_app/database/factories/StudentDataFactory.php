<?php

namespace Database\Factories;

use App\Models\Student\DisabilityCategory;
use App\Models\Student\EmploymentStatus;
use App\Models\Student\EnrollStatus;
use App\Models\Student\Nationality;
use App\Models\Student\PaymentType;
use App\Models\Student\StudentLocationType;
use App\Models\Student\StudentSportsCategory;
use App\Models\Student\StudyForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentData>
 */
class StudentDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'IID' => $this->faker->uuid(),
            'gender' => $this->faker->numberBetween(0, 1),
            'student_location_type_id' => StudentLocationType::get()->random()->id,
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->name(),
            'last_name_eng' => $this->faker->lastName(),
            'first_name_eng' => $this->faker->name(),
            'education_program_id' => $this->faker->numberBetween(1, 10),
            'enroll_status_id' => EnrollStatus::get()->random()->id,
            'study_course' => $this->faker->numberBetween(1, 10),
            'enter_year' => $this->faker->numberBetween(2000, 2023),
            'graduate_year' => $this->faker->numberBetween(2000, 2023),
            'payment_type_id' => PaymentType::get()->random()->id,
            'study_form_id' => StudyForm::get()->random()->id,
            'is_need_dormitory' => $this->faker->numberBetween(0, 1),
            'employment_status_id' => EmploymentStatus::get()->random()->id,
            'after_graduation_status' => $this->faker->numberBetween(1, 10),
            'sports_category_id' => StudentSportsCategory::get()->random()->id,
            'has_special_needs' => $this->faker->numberBetween(0, 1),
            'nationality_id' => Nationality::get()->random()->id,
            'disability_category_id' => DisabilityCategory::get()->random()->id,
            'is_remote_study' => $this->faker->numberBetween(0, 1),
            'has_ielts_toefl' => $this->faker->numberBetween(0, 1),
            'english_level_id' => $this->faker->numberBetween(1, 9),
            'GPA' => $this->faker->numberBetween(1, 9),
            'IGPA' => $this->faker->numberBetween(1, 9),
        ];
    }
}
