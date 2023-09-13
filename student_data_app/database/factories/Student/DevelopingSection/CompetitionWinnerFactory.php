<?php

namespace Database\Factories\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\DevelopingSection;
use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student\DevelopingSection\CompetitionWinner>
 */
class CompetitionWinnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'developing_section_id'=>DevelopingSection::get()->random()->id,
            'student_id'=>StudentData::get()->random()->id,

        ];
    }
}
