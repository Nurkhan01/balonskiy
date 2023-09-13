<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mobility;
use App\Models\Mobility\AgreementType;
use App\Models\Mobility\Country\Country;
use App\Models\Mobility\Country\CountryType;
use App\Models\Mobility\MobilityPaymentType;
use App\Models\Mobility\MobilityType;
use App\Models\Student\DevelopingSection\CompetitionWinner;
use App\Models\Student\DevelopingSection\DevelopingSection;
use App\Models\Student\DevelopingSection\DevelopmentSectionType;
use App\Models\Student\DevelopingSection\StudentDevelopingSection;
use App\Models\Student\DisabilityCategory;
use App\Models\Student\Employment\Employment;
use App\Models\Student\Employment\StudentEmployment;
use App\Models\Student\EmploymentStatus;
use App\Models\Student\EnrollStatus;
use App\Models\Student\Nationality;
use App\Models\Student\PaymentType;
use App\Models\Student\StudentDisability;
use App\Models\Student\StudentLocationType;
use App\Models\Student\StudentSportsCategory;
use App\Models\Student\StudyForm;
use App\Models\StudentData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        StudentLocationType::factory(10)->create();
        EnrollStatus::factory(10)->create();
        PaymentType::factory(10)->create();
        StudyForm::factory(10)->create();
        EmploymentStatus::factory(10)->create();
        Nationality::factory(10)->create();
        StudentSportsCategory::factory(10)->create();
        DisabilityCategory::factory(10)->create();
        StudentData::factory(10)->create();
        CountryType::factory(10)->create();
        Country::factory(10)->create();
        MobilityType::factory(10)->create();
        MobilityPaymentType::factory(10)->create();
        AgreementType::factory(10)->create();
        Mobility::factory(10)->create();
        StudentDisability::factory(10)->create();
        Employment::factory(10)->create();
        StudentEmployment::factory(10)->create();
        DevelopmentSectionType::factory(10)->create();
        DevelopingSection::factory(10)->create();
        StudentDevelopingSection::factory(10)->create();
        CompetitionWinner::factory(10)->create();
    }
}
