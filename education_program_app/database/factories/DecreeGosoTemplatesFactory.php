<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DecreeGosoTemplates>
 */
class DecreeGosoTemplatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'decree' => $this->faker->name(),
            'date' => $this->faker->date(),
            'status' => $this->faker->numberBetween(1, 6),
        ];
    }
}
