<?php

namespace Database\Factories\Teacher\Publication;

use App\Models\Teacher\Publication\Publication;
use App\Models\TeacherData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher\Publication\TeacherPublication>
 */
class TeacherPublicationFactory extends Factory
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
            'publication_id' => Publication::get()->random()->id,
        ];
    }
}
