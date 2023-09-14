<?php

namespace Database\Factories\Teacher;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\ForeignTeacher>
 */
class ForeignTeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => $this->faker->numberBetween(1, 10),
            'foreign_university_id' => $this->faker->numberBetween(1, 10),
            'teacher_financing_type_id' => $this->faker->numberBetween(1, 10),
            'financing_sum' => $this->faker->numberBetween(1, 10),
            'is_in_qswur' => $this->faker->numberBetween(1, 10),
            'country_id' => $this->faker->numberBetween(1, 10),
            'lecture_hours_count' => $this->faker->numberBetween(1, 10),
            'seminar_hours_count' => $this->faker->numberBetween(1, 10),
            'masterclass_hours_count' => $this->faker->numberBetween(1, 10),
            'training_hours_count' => $this->faker->numberBetween(1, 10),
            'credits_count' => $this->faker->numberBetween(1, 10),
            'ects_credits_count' => $this->faker->numberBetween(1, 10),
        ];
    }
}
