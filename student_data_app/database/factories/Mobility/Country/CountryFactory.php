<?php

namespace Database\Factories\Mobility\Country;

use App\Models\Mobility\Country\CountryType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobility\Country\Country>
 */
class CountryFactory extends Factory
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
            'country_type_id' => CountryType::get()->random()->id,
        ];
    }
}
