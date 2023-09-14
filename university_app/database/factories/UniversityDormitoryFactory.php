<?php

namespace Database\Factories;

use App\Models\Dormitory;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UniversityDormitory>
 */
class UniversityDormitoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dormitory_id' => Dormitory::get()->random()->id,
            'university_id' => University::get()->random()->id,
        ];
    }
}
