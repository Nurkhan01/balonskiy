<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CreditTimeType;
use App\Models\DecreeGosoTemplates;
use App\Models\EducationDirection;
use App\Models\EducationDiscipline;
use App\Models\EducationField;
use App\Models\EducationGroup;
use App\Models\EducationModule;
use App\Models\EducationProgram;
use App\Models\EducationProgramAccreditation;
use App\Models\FormationEducationProgram;
use App\Models\GosoComponentName;
use App\Models\GosoCycleName;
use App\Models\GraduateDocumentType;
use App\Models\JointEducationProgram;
use App\Models\JointEpFinancingSource;
use App\Models\Language;
use App\Models\ProfessionalStandard;
use App\Models\StudyLevel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Language::factory(10)->create();
        StudyLevel::factory(10)->create();
        EducationField::factory(10)->create();
        EducationDirection::factory(10)->create();
        EducationGroup::factory(10)->create();
        ProfessionalStandard::factory(10)->create();
        EducationProgram::factory(10)->create();
        CreditTimeType::factory(10)->create();
        EducationDiscipline::factory(10)->create();
        GosoCycleName::factory(10)->create();
        GosoComponentName::factory(10)->create();
        DecreeGosoTemplates::factory(10)->create();
        EducationModule::factory(10)->create();
        FormationEducationProgram::factory(10)->create();
        GraduateDocumentType::factory(10)->create();
        JointEpFinancingSource::factory(10)->create();
        JointEducationProgram::factory(10)->create();
        EducationProgramAccreditation::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
