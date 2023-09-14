<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Teacher\Citizenship;
use App\Models\Teacher\Country;
use App\Models\Teacher\Degree;
use App\Models\Teacher\EnglishLevel;
use App\Models\Teacher\ForeignTeacher;
use App\Models\Teacher\ForeignTeacherConsultation;
use App\Models\Teacher\Publication\Journal;
use App\Models\Teacher\Publication\Publication;
use App\Models\Teacher\Publication\ScienceField;
use App\Models\Teacher\Publication\TeacherPublication;
use App\Models\Teacher\TeacherFinancingType;
use App\Models\Teacher\TeacherLanguage;
use App\Models\Teacher\TeacherUniversity;
use App\Models\Teacher\Training\TeacherTraining;
use App\Models\Teacher\Training\Training;
use App\Models\Teacher\Training\TrainingBasis;
use App\Models\Teacher\Training\TrainingField;
use App\Models\Teacher\Training\TrainingForm;
use App\Models\Teacher\Training\TrainingPaymentType;
use App\Models\TeacherData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Citizenship::factory(10)->create();
        Degree::factory(10)->create();
        EnglishLevel::factory(10)->create();
        TeacherData::factory(10)->create();
        TeacherLanguage::factory(10)->create();
        Journal::factory(10)->create();
        ScienceField::factory(10)->create();
        Publication::factory(10)->create();
        TeacherPublication::factory(10)->create();
        TeacherUniversity::factory(10)->create();
        TrainingBasis::factory(10)->create();
        TrainingForm::factory(10)->create();
        TrainingPaymentType::factory(10)->create();
        Training::factory(10)->create();
        TeacherTraining::factory(10)->create();
        TeacherFinancingType::factory(10)->create();
        Country::factory(10)->create();
        ForeignTeacher::factory(10)->create();
        ForeignTeacherConsultation::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
