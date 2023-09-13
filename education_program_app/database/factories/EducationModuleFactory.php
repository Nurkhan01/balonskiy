<?php

namespace Database\Factories;

use App\Models\DecreeGosoTemplates;
use App\Models\EducationProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationModule>
 */
class EducationModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'module' => $this->faker->name,
            'name' => $this->faker->name,
            'put_status' => $this->faker->numberBetween(1, 6),
            'education_program_id' => EducationProgram::get()->random()->id,
            'decree_goso_templates_id' => DecreeGosoTemplates::get()->random()->id,
            'description' => $this->faker->name,
        ];
    }
}
