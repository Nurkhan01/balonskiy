<?php

namespace Database\Factories;

use App\Models\SportsFacility;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UniversitySportsFacility>
 */
class UniversitySportsFacilityFactory extends Factory
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
            'sports_facilities_id' => SportsFacility::get()->random()->id,
        ];
    }
}
