<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Accreditation;
use App\Models\AccreditationBody;
use App\Models\AccreditationBodyType;
use App\Models\AccreditationType;
use App\Models\Building;
use App\Models\City;
use App\Models\Department;
use App\Models\Dormitory;
use App\Models\DormitoryType;
use App\Models\Laboratory;
use App\Models\ResearchWork;
use App\Models\ResearchWorkType;
use App\Models\ScienceFundingType;
use App\Models\SpecialNeedsCondition;
use App\Models\SportsFacility;
use App\Models\University;
use App\Models\UniversityBuilding;
use App\Models\UniversityDormitory;
use App\Models\UniversityLaboratory;
use App\Models\UniversitySportsFacility;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         City::factory(10)->create();
         ScienceFundingType::factory(10)->create();
         University::factory(10)->create();
         DormitoryType::factory(10)->create();
         Dormitory::factory(10)->create();
         UniversityDormitory::factory(10)->create();
         Department::factory(10)->create();
         AccreditationType::factory(10)->create();
         AccreditationBodyType::factory(10)->create();
         AccreditationBody::factory(10)->create();
         Accreditation::factory(10)->create();
         Building::factory(10)->create();
         UniversityBuilding::factory(10)->create();
         ResearchWorkType::factory(10)->create();
         ResearchWork::factory(10)->create();
         Laboratory::factory(10)->create();
         UniversityLaboratory::factory(10)->create();
         SpecialNeedsCondition::factory(10)->create();
         SportsFacility::factory(10)->create();
         UniversitySportsFacility::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
