<?php

namespace Database\Factories\Teacher\Training;

use App\Models\Teacher\Training\TrainingBasis;
use App\Models\Teacher\Training\TrainingField;
use App\Models\Teacher\Training\TrainingForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\Training\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'training_basis_id' => TrainingBasis::get()->random()->id,
            'training_form_id' => TrainingForm::get()->random()->id,
            'duration' => $this->faker->numberBetween(1, 1224),
            'payment_sum' => $this->faker->numberBetween(1, 1224),
            'training_payment_type_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
