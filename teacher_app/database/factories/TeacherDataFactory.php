<?php

namespace Database\Factories;

use App\Models\Teacher\Citizenship;
use App\Models\Teacher\Degree;
use App\Models\Teacher\EnglishLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeacherData>
 */
class TeacherDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->name(),
            'last_name_eng' => $this->faker->lastName(),
            'first_name_eng' => $this->faker->name(),
            'education_field_id' => $this->faker->numberBetween(1, 10),
            'citizenship_id' => Citizenship::get()->random()->id,
            'degree_id' => Degree::get()->random()->id,
            'teaches_remote_courses' => $this->faker->numberBetween(0, 1),
            'teaches_non_formal_courses' => $this->faker->numberBetween(1, 10),
            'is_foreign' => $this->faker->numberBetween(0, 1),
            'birth_date' => $this->faker->date(),
            'has_ielts_toefl' => $this->faker->boolean(),
            'english_level_id' => EnglishLevel::get()->random()->id,
        ];
    }
}
