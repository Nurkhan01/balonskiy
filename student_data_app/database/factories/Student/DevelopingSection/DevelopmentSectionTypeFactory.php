<?php

namespace Database\Factories\Student\DevelopingSection;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\DevelopingSection\DevelopmentSectionType>
 */
class DevelopmentSectionTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
        ];
    }
}
