<?php

namespace Database\Factories;

use App\Models\AccreditationBodyType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccreditationBody>
 */
class AccreditationBodyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->userName(),
            'accreditation_body_type_id'=>AccreditationBodyType::get()->random()->id,
        ];
    }
}
