<?php

namespace Database\Factories\Student;

use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\StudentDisability>
 */
class StudentDisabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id'=>StudentData::get()->random()->id,
            'type' => $this->faker->name(),
        ];
    }
}
