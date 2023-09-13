<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\ScienceFundingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->userName(),
            'city_id' => City::get()->random()->id,
            'computers_count' => random_int(1, 100),
            'internet_points_number' => random_int(1, 100),
            'internet_speed' => random_int(1, 100),
            'intercollegiate_library_access' => random_int(0, 1),
            'total_grant_funding' => random_int(1, 100),
            'email' => $this->faker->email(),
            'has_corporate_governance_bodies' => random_int(1, 100),
            'science_funding_amount' => random_int(1, 100),
            'science_funding_type_id' => ScienceFundingType::get()->random()->id,
        ];
    }
}
