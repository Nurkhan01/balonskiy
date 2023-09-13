<?php

namespace Database\Factories;

use App\Models\DormitoryType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dormitory>
 */
class DormitoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dormitory_type_id' => DormitoryType::get()->random()->id,
            'expluatation_start_year' => random_int(1, 100),
            'area' => random_int(1, 100),
            'payment_per_month' => random_int(1, 100),
            'payment_per_year' => random_int(1, 100),
        ];
    }
}
