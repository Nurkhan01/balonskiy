<?php

namespace Database\Factories;

use App\Models\EducationDirection;
use App\Models\EducationField;
use App\Models\EducationGroup;
use App\Models\Language;
use App\Models\ProfessionalStandard;
use App\Models\StudyLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationProgram>
 */
class EducationProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'department_id' => $this->faker->numberBetween(1, 2456),
            'language_id' => Language::get()->random()->id,
            'code' => $this->faker->numberBetween(1, 2456),
            'study_level_id' => StudyLevel::get()->random()->id,
            'education_field_id' => EducationField::get()->random()->id,
            'is_inclusive_study' => $this->faker->numberBetween(0, 1),
            'professional_standard_id' => ProfessionalStandard::get()->random()->id,
            'registration_date' => $this->faker->date(),
            'type' => $this->faker->bloodType(),
            'credits' => $this->faker->creditCardType(),
            'education_direction_id' => EducationDirection::get()->random()->id,
            'education_group_id' => EducationGroup::get()->random()->id,
            'is_non_formal' => $this->faker->numberBetween(0, 1),
            'recognizes_previous_nonformal_education' => $this->faker->numberBetween(0, 1),
            'university_representation_id' => $this->faker->numberBetween(1, 9),
            'is_joint' => $this->faker->numberBetween(0, 1),
            'is_remote' => $this->faker->numberBetween(0, 1),
            'is_50_20_30_program' => $this->faker->numberBetween(0, 1),
            'is_in_reestr' => $this->faker->numberBetween(0, 1),
            'is_enc_program' => $this->faker->numberBetween(0, 1),
        ];
    }
}
