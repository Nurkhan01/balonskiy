<?php

namespace Database\Factories\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\DevelopmentSectionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\DevelopingSection\DevelopingSection>
 */
class DevelopingSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'development_section_type_id' => DevelopmentSectionType::get()->random()->id,
        ];
    }
}
