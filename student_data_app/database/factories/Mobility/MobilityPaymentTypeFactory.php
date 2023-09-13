<?php

namespace Database\Factories\Mobility;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobility\MobilityPaymentType>
 */
class MobilityPaymentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=> $this->faker->name(),
            'total_amount'=>$this->faker->numberBetween(1,1251),
        ];
    }
}
