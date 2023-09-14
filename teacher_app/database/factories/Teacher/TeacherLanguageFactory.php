<?php

namespace Database\Factories\Teacher;

use App\Models\TeacherData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\TeacherLanguage>
 */
class TeacherLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => TeacherData::get()->random()->id,
            'language_id' => $this->faker->numberBetween(1,34),
        ];
    }
}
