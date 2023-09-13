<?php

namespace Database\Factories\Teacher;

use App\Models\Teacher\ForeignTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\ForeignTeacherConsultation>
 */
class ForeignTeacherConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foreign_teacher_id' => ForeignTeacher::get()->random()->id,
            'student_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
