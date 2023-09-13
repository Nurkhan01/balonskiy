<?php

namespace Database\Factories;

use App\Models\StudyLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationGroup>
 */
class EducationGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code'=>$this->faker->countryCode(),
            'name'=>$this->faker->name(),
            'study_level_id' => StudyLevel::get()->random()->id,
        ];
    }
}
