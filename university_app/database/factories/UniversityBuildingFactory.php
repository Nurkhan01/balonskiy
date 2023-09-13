<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UniversityBuilding>
 */
class UniversityBuildingFactory extends Factory
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
            'building_id' => Building::get()->random()->id,
        ];
    }
}
