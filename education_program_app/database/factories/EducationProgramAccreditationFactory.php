<?php

namespace Database\Factories;

use App\Models\EducationProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationProgramAccreditation>
 */
class EducationProgramAccreditationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'education_program_id' => EducationProgram::get()->random()->id,
            'report_links' => $this->faker->name,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'accreditation_type_id' => $this->faker->numberBetween(1, 9),
            'accreditation_body_id' => $this->faker->numberBetween(1, 9),
        ];
    }
}
