<?php

namespace Database\Factories\Student\Employment;

use App\Models\Student\Employment\Employment;
use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\Employment\StudentEmployment>
 */
class StudentEmploymentFactory extends Factory
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
            'employment_id'=>Employment::get()->random()->id,
            'works_in_his_field'=>$this->faker->boolean(),
        ];
    }
}
