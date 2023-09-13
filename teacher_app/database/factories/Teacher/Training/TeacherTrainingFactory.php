<?php

namespace Database\Factories\Teacher\Training;

use App\Models\Teacher\Training\Training;
use App\Models\TeacherData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\Training\TeacherTraining>
 */
class TeacherTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'training_id' => Training::get()->random()->id,
            'teacher_id' => TeacherData::get()->random()->id,
        ];
    }
}
