<?php

namespace Database\Factories\Teacher;

use App\Models\TeacherData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\TeacherUniversity>
 */
class TeacherUniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'university_id' => $this->faker->numberBetween(1,34),
            'teacher_id' => TeacherData::get()->random()->id,
            'working_start_date'=>$this->faker->date(),
            'working_end_date'=>$this->faker->date(),
        ];
    }
}
