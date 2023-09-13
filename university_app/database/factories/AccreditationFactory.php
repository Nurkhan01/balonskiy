<?php

namespace Database\Factories;

use App\Models\AccreditationBody;
use App\Models\AccreditationType;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accreditation>
 */
class AccreditationFactory extends Factory
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
            'accreditation_body_id' => AccreditationBody::get()->random()->id,
            'report_links' => $this->faker->url(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'accreditation_type_id' => AccreditationType::get()->random()->id,
        ];
    }
}
