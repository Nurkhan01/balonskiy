<?php

namespace Database\Factories\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\DevelopingSection;
use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\DevelopingSection\StudentDevelopingSection>
 */
class StudentDevelopingSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id'=>StudentData::get()->random()->id,
            'developing_section_id'=>DevelopingSection::get()->random()->id,

        ];
    }
}
