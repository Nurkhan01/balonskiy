<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(),
            'type' => $this->faker->mimeType(),
            'expluatation_start_year' => $this->faker->year(),
            'total_area' => $this->faker->buildingNumber(),
            'classroom_area' => $this->faker->numberBetween(1,900),
            'non_classroom_area' => $this->faker->numberBetween(66,5000),
        ];
    }
}
