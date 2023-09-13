<?php

namespace Database\Factories;

use App\Models\StudyLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationDiscipline>
 */
class EducationDisciplineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'credit' => $this->faker->numberBetween(1, 421),
            'department_id' => $this->faker->numberBetween(1, 2),
            'code' => $this->faker->postcode(),
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'knowledge' => $this->faker->name(),
            'abilities' => $this->faker->name(),
            'recommendation' => $this->faker->name(),
            'study_level_id' => StudyLevel::get()->random()->id,
            'education_language' => $this->faker->languageCode(),
            'is_thread' => $this->faker->boolean(),
            'is_selectable' => $this->faker->boolean(),
            'need_computer' => $this->faker->boolean(),
            'is_multilanguage' => $this->faker->boolean(),
            'is_kazakh' => $this->faker->boolean(),
            'is_russian' => $this->faker->boolean(),
            'is_remote' => $this->faker->boolean(),
            'is_not_remote' => $this->faker->boolean(),
            'is_mook' => $this->faker->boolean(),
            'mook_platform_name' => $this->faker->name(),
            'mook_cource_duration' => $this->faker->numberBetween(1, 2),
        ];
    }
}
