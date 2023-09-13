<?php

namespace Database\Factories;

use App\Models\EducationDiscipline;
use App\Models\EducationModule;
use App\Models\EducationProgram;
use App\Models\GosoComponentName;
use App\Models\GosoCycleName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormationEducationProgram>
 */
class FormationEducationProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'education_module_id' => EducationModule::get()->random()->id,
            'education_program_id' => EducationProgram::get()->random()->id,
            'goso_cycle_name_id' => GosoCycleName::get()->random()->id,
            'education_discipline_id' => EducationDiscipline::get()->random()->id,
            'goso_component_name_id' => GosoComponentName::get()->random()->id,
            'credit' => $this->faker->numberBetween(),
            'is_cv' => $this->faker->boolean(),
            'f_group_id' => $this->faker->numberBetween(),
            'is_confirmed' => $this->faker->boolean(),
            'component_status' => $this->faker->numberBetween(),
            'is_minor' => $this->faker->boolean(),
            'minor_f_group_id' => $this->faker->numberBetween(),
        ];
    }
}
