<?php

namespace Database\Factories\Mobility\Country;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobility\Country\CountryType>
 */
class CountryTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_type' => $this->faker->countryCode(),
        ];
    }
}
