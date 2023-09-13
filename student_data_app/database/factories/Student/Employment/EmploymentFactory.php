<?php

namespace Database\Factories\Student\Employment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\Employment\Employment>
 */
class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'working_start_date' => $this->faker->date(),
            'working_end_date' => $this->faker->date(),
        ];
    }
}
