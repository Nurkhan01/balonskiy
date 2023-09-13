<?php

namespace Database\Factories;

use App\Models\EducationProgram;
use App\Models\GraduateDocumentType;
use App\Models\JointEpFinancingSource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JointEducationProgram>
 */
class JointEducationProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'education_program_id' => EducationProgram::get()->random()->id,
            'main_university_id' => $this->faker->numberBetween(1, 9),
            'partner_university_id' => $this->faker->numberBetween(1, 9),
            'foreign_partner_university_id' => $this->faker->numberBetween(1, 9),
            'contract_start_date' => $this->faker->date,
            'contract_end_date' => $this->faker->date,
            'joint_ep_financing_source_id' => JointEpFinancingSource::get()->random()->id,
            'graduate_document_type_id' => GraduateDocumentType::get()->random()->id,
            'interaction_problems' => $this->faker->name,
            'problem_solving_suggestions' => $this->faker->name,
            'is_double_diploma' => $this->faker->boolean,
        ];
    }
}
