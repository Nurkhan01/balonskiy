<?php

namespace Database\Factories\Teacher\Publication;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\Publication\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'quartile' => $this->faker->numberBetween(1,6),
            'site_score' => $this->faker->numberBetween(1,6),
            'impact_factor' => $this->faker->numberBetween(1,6),
        ];
    }
}
