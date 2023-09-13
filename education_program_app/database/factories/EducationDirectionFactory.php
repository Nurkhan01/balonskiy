<?php

namespace Database\Factories;

use App\Models\EducationField;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationDirection>
 */
class EducationDirectionFactory extends Factory
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
            'education_field_id' => EducationField::get()->random()->id,
        ];
    }
}
