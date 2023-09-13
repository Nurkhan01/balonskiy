<?php

namespace Database\Factories;

use App\Models\Mobility\AgreementType;
use App\Models\Mobility\Country\Country;
use App\Models\Mobility\MobilityPaymentType;
use App\Models\Mobility\MobilityType;
use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobility>
 */
class MobilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => StudentData::get()->random()->id,
            'mobility_type_id' => MobilityType::get()->random()->id,
            'country_id' => Country::get()->random()->id,
            'university_id' => $this->faker->numberBetween(1, 9),
            'foreign_university_id' => $this->faker->numberBetween(1, 9),
            'mobility_payment_type_id' => MobilityPaymentType::get()->random()->id,
            'agreement_type_id' => AgreementType::get()->random()->id,
            'mobility_start_date' => $this->faker->date(),
            'mobility_end_date' => $this->faker->date(),
            'payment_amount' => $this->faker->numberBetween(1, 214),
            'taken_credits' => $this->faker->numberBetween(1, 214),
        ];
    }
}
