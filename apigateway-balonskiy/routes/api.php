<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationProgramMicroservice\CreditTimeTypeController;
use App\Http\Controllers\EducationProgramMicroservice\DecreeGosoTemplatesController;
use App\Http\Controllers\EducationProgramMicroservice\EducationDirectionController;
use App\Http\Controllers\EducationProgramMicroservice\EducationDisciplineController;
use App\Http\Controllers\EducationProgramMicroservice\EducationFieldController;
use App\Http\Controllers\EducationProgramMicroservice\EducationGroupController;
use App\Http\Controllers\EducationProgramMicroservice\EducationModuleController;
use App\Http\Controllers\EducationProgramMicroservice\EducationProgramAccreditationController;
use App\Http\Controllers\EducationProgramMicroservice\EducationProgramController;
use App\Http\Controllers\EducationProgramMicroservice\FormationEducationProgramController;
use App\Http\Controllers\EducationProgramMicroservice\GosoComponentNameController;
use App\Http\Controllers\EducationProgramMicroservice\GosoCycleNameController;
use App\Http\Controllers\EducationProgramMicroservice\GraduateDocumentTypeController;
use App\Http\Controllers\EducationProgramMicroservice\JointEducationProgramController;
use App\Http\Controllers\EducationProgramMicroservice\JointEpFinancingSourceController;
use App\Http\Controllers\EducationProgramMicroservice\LanguageController;
use App\Http\Controllers\EducationProgramMicroservice\ProfessionalStandardController;
use App\Http\Controllers\EducationProgramMicroservice\StudyLevelController;
use App\Http\Controllers\StudentMicroservice\Mobility\AgreementTypeController;
use App\Http\Controllers\StudentMicroservice\Mobility\Country\CountryController;
use App\Http\Controllers\StudentMicroservice\Mobility\Country\CountryTypeController;
use App\Http\Controllers\StudentMicroservice\Mobility\MobilityPaymentTypeController;
use App\Http\Controllers\StudentMicroservice\Mobility\MobilityTypeController;
use App\Http\Controllers\StudentMicroservice\MobilityController;
use App\Http\Controllers\StudentMicroservice\Student\DevelopingSection\CompetitionWinnerController;
use App\Http\Controllers\StudentMicroservice\Student\DevelopingSection\DevelopingSectionController;
use App\Http\Controllers\StudentMicroservice\Student\DevelopingSection\DevelopmentSectionTypeController;
use App\Http\Controllers\StudentMicroservice\Student\DevelopingSection\StudentDevelopingSectionController;
use App\Http\Controllers\StudentMicroservice\Student\DisabilityCategoryController;
use App\Http\Controllers\StudentMicroservice\Student\Employment\EmploymentController;
use App\Http\Controllers\StudentMicroservice\Student\Employment\StudentEmploymentController;
use App\Http\Controllers\StudentMicroservice\Student\EmploymentStatusController;
use App\Http\Controllers\StudentMicroservice\Student\EnrollStatusController;
use App\Http\Controllers\StudentMicroservice\Student\NationalityController;
use App\Http\Controllers\StudentMicroservice\Student\PaymentTypeController;
use App\Http\Controllers\StudentMicroservice\Student\StudentDisabilityController;
use App\Http\Controllers\StudentMicroservice\Student\StudentLocationTypeController;
use App\Http\Controllers\StudentMicroservice\Student\StudentSportsCategoryController;
use App\Http\Controllers\StudentMicroservice\Student\StudyFormController;
use App\Http\Controllers\StudentMicroservice\StudentDataController;
use App\Http\Controllers\TeacherMicroservice\Teacher\CitizenshipController;
use App\Http\Controllers\TeacherMicroservice\Teacher\DegreeController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Publication\JournalController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Publication\PublicationController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Publication\ScienceFieldController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Publication\TeacherPublicationController;
use App\Http\Controllers\TeacherMicroservice\Teacher\TeacherLanguageController;
use App\Http\Controllers\TeacherMicroservice\Teacher\TeacherUniversityController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Training\TeacherTrainingController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Training\TrainingBasisController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Training\TrainingController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Training\TrainingFieldController;
use App\Http\Controllers\TeacherMicroservice\Teacher\Training\TrainingFormController;
use App\Http\Controllers\TeacherMicroservice\TeacherDataController;
use App\Http\Controllers\UniversityMicroservice\Accreditation\AccreditationBodyController;
use App\Http\Controllers\UniversityMicroservice\Accreditation\AccreditationBodyTypeController;
use App\Http\Controllers\UniversityMicroservice\Accreditation\AccreditationController;
use App\Http\Controllers\UniversityMicroservice\Accreditation\AccreditationTypeController;
use App\Http\Controllers\UniversityMicroservice\Building\BuildingController;
use App\Http\Controllers\UniversityMicroservice\Building\UniversityBuildingController;
use App\Http\Controllers\UniversityMicroservice\Department\DepartmentController;
use App\Http\Controllers\UniversityMicroservice\Dormitory\DormitoryController;
use App\Http\Controllers\UniversityMicroservice\Dormitory\DormitoryTypeController;
use App\Http\Controllers\UniversityMicroservice\Dormitory\UniversityDormitoryController;
use App\Http\Controllers\UniversityMicroservice\Laboratory\LaboratoryController;
use App\Http\Controllers\UniversityMicroservice\Laboratory\UniversityLaboratoryController;
use App\Http\Controllers\UniversityMicroservice\ResearchWork\ResearchWorkController;
use App\Http\Controllers\UniversityMicroservice\ResearchWork\ResearchWorkTypeController;
use App\Http\Controllers\UniversityMicroservice\SpecialNeedsCondition\SpecialNeedsConditionController;
use App\Http\Controllers\UniversityMicroservice\SportsFacility\SportsFacilityController;
use App\Http\Controllers\UniversityMicroservice\SportsFacility\UniversitySportsFacilityController;
use App\Http\Controllers\UniversityMicroservice\University\CityController;
use App\Http\Controllers\UniversityMicroservice\University\ScienceFundingTypeController;
use App\Http\Controllers\UniversityMicroservice\University\UniversityController;
use App\Http\Controllers\UserController;
use App\Services\Api\HttpRequestService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/authenticate', [AuthController::class, 'index']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/me', [UserController::class, 'index']);

// Шаг 5: Создание маршрутов API-шлюза
Route::group(['middleware' => 'api.auth'], function () {
    Route::get('/user', function () {
        return 'good job';
    })->middleware(['admin.role']);
});


Route::group(['middleware' => 'api.auth'], function () {

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'language'], function ($router) {
        Route::get('/', [LanguageController::class, 'index']);
        Route::post('/create', [LanguageController::class, 'create']);
        Route::put('/update/{id}', [LanguageController::class, 'update']);
        Route::delete('/delete/{id}', [LanguageController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-program'], function ($router) {
        Route::get('/', [EducationProgramController::class, 'index']);
        Route::post('/create', [EducationProgramController::class, 'create']);
        Route::put('/update/{id}', [EducationProgramController::class, 'update']);
        Route::delete('/delete/{id}', [EducationProgramController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'credit-time-type'], function ($router) {
        Route::get('/', [CreditTimeTypeController::class, 'index']);
        Route::post('/create', [CreditTimeTypeController::class, 'create']);
        Route::put('/update/{id}', [CreditTimeTypeController::class, 'update']);
        Route::delete('/delete/{id}', [CreditTimeTypeController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'decree-goso-templates'], function ($router) {
        Route::get('/', [DecreeGosoTemplatesController::class, 'index']);
        Route::post('/create', [DecreeGosoTemplatesController::class, 'create']);
        Route::put('/update/{id}', [DecreeGosoTemplatesController::class, 'update']);
        Route::delete('/delete/{id}', [DecreeGosoTemplatesController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-direction'], function ($router) {
        Route::get('/', [EducationDirectionController::class, 'index']);
        Route::post('/create', [EducationDirectionController::class, 'create']);
        Route::put('/update/{id}', [EducationDirectionController::class, 'update']);
        Route::delete('/delete/{id}', [EducationDirectionController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-discipline'], function ($router) {
        Route::get('/', [EducationDisciplineController::class, 'index']);
        Route::post('/create', [EducationDisciplineController::class, 'create']);
        Route::put('/update/{id}', [EducationDisciplineController::class, 'update']);
        Route::delete('/delete/{id}', [EducationDisciplineController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-field'], function ($router) {
        Route::get('/', [EducationFieldController::class, 'index']);
        Route::post('/create', [EducationFieldController::class, 'create']);
        Route::put('/update/{id}', [EducationFieldController::class, 'update']);
        Route::delete('/delete/{id}', [EducationFieldController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-group'], function ($router) {
        Route::get('/', [EducationGroupController::class, 'index']);
        Route::post('/create', [EducationGroupController::class, 'create']);
        Route::put('/update/{id}', [EducationGroupController::class, 'update']);
        Route::delete('/delete/{id}', [EducationGroupController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-module'], function ($router) {
        Route::get('/', [EducationModuleController::class, 'index']);
        Route::post('/create', [EducationModuleController::class, 'create']);
        Route::put('/update/{id}', [EducationModuleController::class, 'update']);
        Route::delete('/delete/{id}', [EducationModuleController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'formation-education-program'], function ($router) {
        Route::get('/', [FormationEducationProgramController::class, 'index']);
        Route::post('/create', [FormationEducationProgramController::class, 'create']);
        Route::put('/update/{id}', [FormationEducationProgramController::class, 'update']);
        Route::delete('/delete/{id}', [FormationEducationProgramController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'goso-component-name'], function ($router) {
        Route::get('/', [GosoComponentNameController::class, 'index']);
        Route::post('/create', [GosoComponentNameController::class, 'create']);
        Route::put('/update/{id}', [GosoComponentNameController::class, 'update']);
        Route::delete('/delete/{id}', [GosoComponentNameController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'goso-cycle-name'], function ($router) {
        Route::get('/', [GosoCycleNameController::class, 'index']);
        Route::post('/create', [GosoCycleNameController::class, 'create']);
        Route::put('/update/{id}', [GosoCycleNameController::class, 'update']);
        Route::delete('/delete/{id}', [GosoCycleNameController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'professional-standard'], function ($router) {
        Route::get('/', [ProfessionalStandardController::class, 'index']);
        Route::post('/create', [ProfessionalStandardController::class, 'create']);
        Route::put('/update/{id}', [ProfessionalStandardController::class, 'update']);
        Route::delete('/delete/{id}', [ProfessionalStandardController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'study-level'], function ($router) {
        Route::get('/', [StudyLevelController::class, 'index']);
        Route::post('/create', [StudyLevelController::class, 'create']);
        Route::put('/update/{id}', [StudyLevelController::class, 'update']);
        Route::delete('/delete/{id}', [StudyLevelController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'joint-ep-financing-source'], function ($router) {
        Route::get('/', [JointEpFinancingSourceController::class, 'index']);
        Route::post('/create', [JointEpFinancingSourceController::class, 'create']);
        Route::put('/update/{dataId}', [JointEpFinancingSourceController::class, 'update']);
        Route::delete('/delete/{dataId}', [JointEpFinancingSourceController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'graduate-document-type'], function ($router) {
        Route::get('/', [GraduateDocumentTypeController::class, 'index']);
        Route::post('/create', [GraduateDocumentTypeController::class, 'create']);
        Route::put('/update/{dataId}', [GraduateDocumentTypeController::class, 'update']);
        Route::delete('/delete/{dataId}', [GraduateDocumentTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'joint-education-program'], function ($router) {
        Route::get('/', [JointEducationProgramController::class, 'index']);
        Route::post('/create', [JointEducationProgramController::class, 'create']);
        Route::put('/update/{dataId}', [JointEducationProgramController::class, 'update']);
        Route::delete('/delete/{dataId}', [JointEducationProgramController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-program-accreditation'], function ($router) {
        Route::get('/', [EducationProgramAccreditationController::class, 'index']);
        Route::post('/create', [EducationProgramAccreditationController::class, 'create']);
        Route::put('/update/{dataId}', [EducationProgramAccreditationController::class, 'update']);
        Route::delete('/delete/{dataId}', [EducationProgramAccreditationController::class, 'delete']);
    });


    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university'], function ($router) {
        Route::get('/', [UniversityController::class, 'index']);
        Route::post('/create', [UniversityController::class, 'create']);
        Route::put('/update/{id}', [UniversityController::class, 'update']);
        Route::delete('/delete/{id}', [UniversityController::class, 'delete']);
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'city'], function ($router) {
            Route::get('/', [CityController::class, 'index']);
            Route::post('/create', [CityController::class, 'create']);
            Route::put('/update/{id}', [CityController::class, 'update']);
            Route::delete('/delete/{id}', [CityController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'science-funding-type'], function ($router) {
            Route::get('/', [ScienceFundingTypeController::class, 'index']);
            Route::post('/create', [ScienceFundingTypeController::class, 'create']);
            Route::put('/update/{id}', [ScienceFundingTypeController::class, 'update']);
            Route::delete('/delete/{id}', [ScienceFundingTypeController::class, 'delete']);
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'special-needs-condition'], function ($router) {
        Route::get('/', [SpecialNeedsConditionController::class, 'index']);
        Route::post('/create', [SpecialNeedsConditionController::class, 'create']);
        Route::put('/update/{id}', [SpecialNeedsConditionController::class, 'update']);
        Route::delete('/delete/{id}', [SpecialNeedsConditionController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'dormitory'], function ($router) {
        Route::get('/', [DormitoryController::class, 'index']);
        Route::post('/create', [DormitoryController::class, 'create']);
        Route::put('/update/{id}', [DormitoryController::class, 'update']);
        Route::delete('/delete/{id}', [DormitoryController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'dormitory-type'], function ($router) {
        Route::get('/', [DormitoryTypeController::class, 'index']);
        Route::post('/create', [DormitoryTypeController::class, 'create']);
        Route::put('/update/{id}', [DormitoryTypeController::class, 'update']);
        Route::delete('/delete/{id}', [DormitoryTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-dormitory'], function ($router) {
        Route::get('/', [UniversityDormitoryController::class, 'index']);
        Route::post('/create', [UniversityDormitoryController::class, 'create']);
        Route::put('/update/{id}', [UniversityDormitoryController::class, 'update']);
        Route::delete('/delete/{id}', [UniversityDormitoryController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'department'], function ($router) {
        Route::get('/', [DepartmentController::class, 'index']);
        Route::post('/create', [DepartmentController::class, 'create']);
        Route::put('/update/{id}', [DepartmentController::class, 'update']);
        Route::delete('/delete/{id}', [DepartmentController::class, 'delete']);
    });


    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'accreditation'], function ($router) {
        Route::get('/', [AccreditationController::class, 'index']);
        Route::post('/create', [AccreditationController::class, 'create']);
        Route::put('/update/{id}', [AccreditationController::class, 'update']);
        Route::delete('/delete/{id}', [AccreditationController::class, 'delete']);
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'body'], function ($router) {
            Route::get('/', [AccreditationBodyController::class, 'index']);
            Route::post('/create', [AccreditationBodyController::class, 'create']);
            Route::put('/update/{id}', [AccreditationBodyController::class, 'update']);
            Route::delete('/delete/{id}', [AccreditationBodyController::class, 'delete']);
            Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
                Route::get('/', [AccreditationBodyTypeController::class, 'index']);
                Route::post('/create', [AccreditationBodyTypeController::class, 'create']);
                Route::put('/update/{id}', [AccreditationBodyTypeController::class, 'update']);
                Route::delete('/delete/{id}', [AccreditationBodyTypeController::class, 'delete']);
            });
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [AccreditationTypeController::class, 'index']);
            Route::post('/create', [AccreditationTypeController::class, 'create']);
            Route::put('/update/{id}', [AccreditationTypeController::class, 'update']);
            Route::delete('/delete/{id}', [AccreditationTypeController::class, 'delete']);
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'building'], function ($router) {
        Route::get('/', [BuildingController::class, 'index']);
        Route::post('/create', [BuildingController::class, 'create']);
        Route::put('/update/{building}', [BuildingController::class, 'update']);
        Route::delete('/delete/{building}', [BuildingController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-building'], function ($router) {
        Route::get('/', [UniversityBuildingController::class, 'index']);
        Route::post('/create', [UniversityBuildingController::class, 'create']);
        Route::put('/update/{id}', [UniversityBuildingController::class, 'update']);
        Route::delete('/delete/{id}', [UniversityBuildingController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'research-work'], function ($router) {
        Route::get('/', [ResearchWorkController::class, 'index']);
        Route::post('/create', [ResearchWorkController::class, 'create']);
        Route::put('/update/{id}', [ResearchWorkController::class, 'update']);
        Route::delete('/delete/{id}', [ResearchWorkController::class, 'delete']);
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [ResearchWorkTypeController::class, 'index']);
            Route::post('/create', [ResearchWorkTypeController::class, 'create']);
            Route::put('/update/{id}', [ResearchWorkTypeController::class, 'update']);
            Route::delete('/delete/{id}', [ResearchWorkTypeController::class, 'delete']);
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'laboratory'], function ($router) {
        Route::get('/', [LaboratoryController::class, 'index']);
        Route::post('/create', [LaboratoryController::class, 'create']);
        Route::put('/update/{id}', [LaboratoryController::class, 'update']);
        Route::delete('/delete/{id}', [LaboratoryController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-laboratory'], function ($router) {
        Route::get('/', [UniversityLaboratoryController::class, 'index']);
        Route::post('/create', [UniversityLaboratoryController::class, 'create']);
        Route::put('/update/{id}', [UniversityLaboratoryController::class, 'update']);
        Route::delete('/delete/{id}', [UniversityLaboratoryController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'sports-facility'], function ($router) {
        Route::get('/', [SportsFacilityController::class, 'index']);
        Route::post('/create', [SportsFacilityController::class, 'create']);
        Route::put('/update/{id}', [SportsFacilityController::class, 'update']);
        Route::delete('/delete/{id}', [SportsFacilityController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-sports-facility'], function ($router) {
        Route::get('/', [UniversitySportsFacilityController::class, 'index']);
        Route::post('/create', [UniversitySportsFacilityController::class, 'create']);
        Route::put('/update/{id}', [UniversitySportsFacilityController::class, 'update']);
        Route::delete('/delete/{id}', [UniversitySportsFacilityController::class, 'delete']);
    });


    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student-data'], function ($router) {
        Route::get('/', [StudentDataController::class, 'index']);
        Route::post('/create', [StudentDataController::class, 'create']);
        Route::put('/update/{id}', [StudentDataController::class, 'update']);
        Route::delete('/delete/{id}', [StudentDataController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student'], function ($router) {
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'disability-category'], function ($router) {
            Route::get('/', [DisabilityCategoryController::class, 'index']);
            Route::post('/create', [DisabilityCategoryController::class, 'create']);
            Route::put('/update/{id}', [DisabilityCategoryController::class, 'update']);
            Route::delete('/delete/{id}', [DisabilityCategoryController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment-status'], function ($router) {
            Route::get('/', [EmploymentStatusController::class, 'index']);
            Route::post('/create', [EmploymentStatusController::class, 'create']);
            Route::put('/update/{id}', [EmploymentStatusController::class, 'update']);
            Route::delete('/delete/{id}', [EmploymentStatusController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'enroll-status'], function ($router) {
            Route::get('/', [EnrollStatusController::class, 'index']);
            Route::post('/create', [EnrollStatusController::class, 'create']);
            Route::put('/update/{id}', [EnrollStatusController::class, 'update']);
            Route::delete('/delete/{id}', [EnrollStatusController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'nationality'], function ($router) {
            Route::get('/', [NationalityController::class, 'index']);
            Route::post('/create', [NationalityController::class, 'create']);
            Route::put('/update/{id}', [NationalityController::class, 'update']);
            Route::delete('/delete/{id}', [NationalityController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'payment-type'], function ($router) {
            Route::get('/', [PaymentTypeController::class, 'index']);
            Route::post('/create', [PaymentTypeController::class, 'create']);
            Route::put('/update/{id}', [PaymentTypeController::class, 'update']);
            Route::delete('/delete/{id}', [PaymentTypeController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'location-type'], function ($router) {
            Route::get('/', [StudentLocationTypeController::class, 'index']);
            Route::post('/create', [StudentLocationTypeController::class, 'create']);
            Route::put('/update/{id}', [StudentLocationTypeController::class, 'update']);
            Route::delete('/delete/{id}', [StudentLocationTypeController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'sports-category'], function ($router) {
            Route::get('/', [StudentSportsCategoryController::class, 'index']);
            Route::post('/create', [StudentSportsCategoryController::class, 'create']);
            Route::put('/update/{id}', [StudentSportsCategoryController::class, 'update']);
            Route::delete('/delete/{id}', [StudentSportsCategoryController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'study-form'], function ($router) {
            Route::get('/', [StudyFormController::class, 'index']);
            Route::post('/create', [StudyFormController::class, 'create']);
            Route::put('/update/{id}', [StudyFormController::class, 'update']);
            Route::delete('/delete/{id}', [StudyFormController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment'], function ($router) {
            Route::get('/', [StudentEmploymentController::class, 'index']);
            Route::post('/create', [StudentEmploymentController::class, 'create']);
            Route::put('/update/{id}', [StudentEmploymentController::class, 'update']);
            Route::delete('/delete/{id}', [StudentEmploymentController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'disability'], function ($router) {
            Route::get('/', [StudentDisabilityController::class, 'index']);
            Route::post('/create', [StudentDisabilityController::class, 'create']);
            Route::put('/update/{id}', [StudentDisabilityController::class, 'update']);
            Route::delete('/delete/{id}', [StudentDisabilityController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'developing-section'], function ($router) {
            Route::get('/', [StudentDevelopingSectionController::class, 'index']);
            Route::post('/create', [StudentDevelopingSectionController::class, 'create']);
            Route::put('/update/{id}', [StudentDevelopingSectionController::class, 'update']);
            Route::delete('/delete/{id}', [StudentDevelopingSectionController::class, 'delete']);
        });
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'mobility'], function ($router) {
        Route::get('/', [MobilityController::class, 'index']);
        Route::post('/create', [MobilityController::class, 'create']);
        Route::put('/update/{id}', [MobilityController::class, 'update']);
        Route::delete('/delete/{id}', [MobilityController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [MobilityTypeController::class, 'index']);
            Route::post('/create', [MobilityTypeController::class, 'create']);
            Route::put('/update/{id}', [MobilityTypeController::class, 'update']);
            Route::delete('/delete/{id}', [MobilityTypeController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'payment-type'], function ($router) {
            Route::get('/', [MobilityPaymentTypeController::class, 'index']);
            Route::post('/create', [MobilityPaymentTypeController::class, 'create']);
            Route::put('/update/{id}', [MobilityPaymentTypeController::class, 'update']);
            Route::delete('/delete/{id}', [MobilityPaymentTypeController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'agreement-type'], function ($router) {
            Route::get('/', [AgreementTypeController::class, 'index']);
            Route::post('/create', [AgreementTypeController::class, 'create']);
            Route::put('/update/{id}', [AgreementTypeController::class, 'update']);
            Route::delete('/delete/{id}', [AgreementTypeController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'country'], function ($router) {
            Route::get('/', [CountryController::class, 'index']);
            Route::post('/create', [CountryController::class, 'create']);
            Route::put('/update/{id}', [CountryController::class, 'update']);
            Route::delete('/delete/{id}', [CountryController::class, 'delete']);

            Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
                Route::get('/', [CountryTypeController::class, 'index']);
                Route::post('/create', [CountryTypeController::class, 'create']);
                Route::put('/update/{id}', [CountryTypeController::class, 'update']);
                Route::delete('/delete/{id}', [CountryTypeController::class, 'delete']);
            });
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment'], function ($router) {
        Route::get('/', [EmploymentController::class, 'index']);
        Route::post('/create', [EmploymentController::class, 'create']);
        Route::put('/update/{id}', [EmploymentController::class, 'update']);
        Route::delete('/delete/{id}', [EmploymentController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'developing-section'], function ($router) {
        Route::get('/', [DevelopingSectionController::class, 'index']);
        Route::post('/create', [DevelopingSectionController::class, 'create']);
        Route::put('/update/{id}', [DevelopingSectionController::class, 'update']);
        Route::delete('/delete/{id}', [DevelopingSectionController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [DevelopmentSectionTypeController::class, 'index']);
            Route::post('/create', [DevelopmentSectionTypeController::class, 'create']);
            Route::put('/update/{id}', [DevelopmentSectionTypeController::class, 'update']);
            Route::delete('/delete/{id}', [DevelopmentSectionTypeController::class, 'delete']);
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'competition-winner'], function ($router) {
        Route::get('/', [CompetitionWinnerController::class, 'index']);
        Route::post('/create', [CompetitionWinnerController::class, 'create']);
        Route::put('/update/{id}', [CompetitionWinnerController::class, 'update']);
        Route::delete('/delete/{id}', [CompetitionWinnerController::class, 'delete']);
    });


    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'teacher'], function ($router) {
        Route::get('/', [TeacherDataController::class, 'index']);
        Route::post('/create', [TeacherDataController::class, 'create']);
        Route::put('/update/{id}', [TeacherDataController::class, 'update']);
        Route::delete('/delete/{id}', [TeacherDataController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'citizenship'], function ($router) {
            Route::get('/', [CitizenshipController::class, 'index']);
            Route::post('/create', [CitizenshipController::class, 'create']);
            Route::put('/update/{id}', [CitizenshipController::class, 'update']);
            Route::delete('/delete/{id}', [CitizenshipController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'degree'], function ($router) {
            Route::get('/', [DegreeController::class, 'index']);
            Route::post('/create', [DegreeController::class, 'create']);
            Route::put('/update/{id}', [DegreeController::class, 'update']);
            Route::delete('/delete/{id}', [DegreeController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'language'], function ($router) {
            Route::get('/', [TeacherLanguageController::class, 'index']);
            Route::post('/create', [TeacherLanguageController::class, 'create']);
            Route::put('/update/{id}', [TeacherLanguageController::class, 'update']);
            Route::delete('/delete/{id}', [TeacherLanguageController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university'], function ($router) {
            Route::get('/', [TeacherUniversityController::class, 'index']);
            Route::post('/create', [TeacherUniversityController::class, 'create']);
            Route::put('/update/{id}', [TeacherUniversityController::class, 'update']);
            Route::delete('/delete/{id}', [TeacherUniversityController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'training'], function ($router) {
            Route::get('/', [TeacherTrainingController::class, 'index']);
            Route::post('/create', [TeacherTrainingController::class, 'create']);
            Route::put('/update/{id}', [TeacherTrainingController::class, 'update']);
            Route::delete('/delete/{id}', [TeacherTrainingController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'publication'], function ($router) {
            Route::get('/', [TeacherPublicationController::class, 'index']);
            Route::post('/create', [TeacherPublicationController::class, 'create']);
            Route::put('/update/{id}', [TeacherPublicationController::class, 'update']);
            Route::delete('/delete/{id}', [TeacherPublicationController::class, 'delete']);
        });
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'training'], function ($router) {
        Route::get('/', [TrainingController::class, 'index']);
        Route::post('/create', [TrainingController::class, 'create']);
        Route::put('/update/{id}', [TrainingController::class, 'update']);
        Route::delete('/delete/{id}', [TrainingController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'basis'], function ($router) {
            Route::get('/', [TrainingBasisController::class, 'index']);
            Route::post('/create', [TrainingBasisController::class, 'create']);
            Route::put('/update/{id}', [TrainingBasisController::class, 'update']);
            Route::delete('/delete/{id}', [TrainingBasisController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'field'], function ($router) {
            Route::get('/', [TrainingFieldController::class, 'index']);
            Route::post('/create', [TrainingFieldController::class, 'create']);
            Route::put('/update/{id}', [TrainingFieldController::class, 'update']);
            Route::delete('/delete/{id}', [TrainingFieldController::class, 'delete']);
        });

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'form'], function ($router) {
            Route::get('/', [TrainingFormController::class, 'index']);
            Route::post('/create', [TrainingFormController::class, 'create']);
            Route::put('/update/{id}', [TrainingFormController::class, 'update']);
            Route::delete('/delete/{id}', [TrainingFormController::class, 'delete']);
        });
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'publication'], function ($router) {
        Route::get('/', [PublicationController::class, 'index']);
        Route::post('/create', [PublicationController::class, 'create']);
        Route::put('/update/{id}', [PublicationController::class, 'update']);
        Route::delete('/delete/{id}', [PublicationController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'journal'], function ($router) {
            Route::get('/', [JournalController::class, 'index']);
            Route::post('/create', [JournalController::class, 'create']);
            Route::put('/update/{id}', [JournalController::class, 'update']);
            Route::delete('/delete/{id}', [JournalController::class, 'delete']);
        });
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'science-field'], function ($router) {
            Route::get('/', [ScienceFieldController::class, 'index']);
            Route::post('/create', [ScienceFieldController::class, 'create']);
            Route::put('/update/{id}', [ScienceFieldController::class, 'update']);
            Route::delete('/delete/{id}', [ScienceFieldController::class, 'delete']);
        });
    });
})->middleware(['admin.role']);;


