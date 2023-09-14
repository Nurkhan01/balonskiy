<?php

namespace Database\Factories;

use App\Models\ResearchWorkType;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResearchWork>
 */
class ResearchWorkFactory extends Factory
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
            'name' => $this->faker->name(),
            'research_work_type_id' => ResearchWorkType::get()->random()->id,
            'revenue' => $this->faker->numberBetween(1, 900),
        ];
    }
}
