<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialNeedsCondition>
 */
class SpecialNeedsConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'university_id' => University::get()->random()->id,
            'entrance_count' => $this->faker->numberBetween(1, 1000),
            'sanitary_facilities_count' => $this->faker->numberBetween(1, 1000),
            'help_button_count' => $this->faker->numberBetween(1, 1000),
            'has_ramps__or_lifts' => $this->faker->numberBetween(0, 1),
            'has_stairs_with_handrails' => $this->faker->numberBetween(0, 1),
            'has_special_parkings' => $this->faker->numberBetween(0, 1),
            'has_navigation_means' => $this->faker->numberBetween(0, 1),
            'has_stairs_constrast_color' => $this->faker->numberBetween(0, 1),
        ];
    }
}
