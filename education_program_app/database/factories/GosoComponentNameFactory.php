<?php

namespace Database\Factories;

use App\Models\StudyLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GosoComponentName>
 */
class GosoComponentNameFactory extends Factory
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
            'short_name' => $this->faker->name(),
            'study_level_id' => StudyLevel::get()->random()->id,
        ];
    }
}
