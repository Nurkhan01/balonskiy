<?php

use App\Http\Controllers\Accreditation\AccreditationBodyController;
use App\Http\Controllers\Accreditation\AccreditationBodyTypeController;
use App\Http\Controllers\Accreditation\AccreditationController;
use App\Http\Controllers\Accreditation\AccreditationTypeController;
use App\Http\Controllers\Building\BuildingController;
use App\Http\Controllers\Building\UniversityBuildingController;
use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Dormitory\DormitoryController;
use App\Http\Controllers\Dormitory\DormitoryTypeController;
use App\Http\Controllers\Dormitory\UniversityDormitoryController;
use App\Http\Controllers\Laboratory\LaboratoryController;
use App\Http\Controllers\Laboratory\UniversityLaboratoryController;
use App\Http\Controllers\ResearchWork\ResearchWorkController;
use App\Http\Controllers\ResearchWork\ResearchWorkTypeController;
use App\Http\Controllers\SpecialNeedsCondition\SpecialNeedsConditionController;
use App\Http\Controllers\SportsFacility\SportsFacilityController;
use App\Http\Controllers\SportsFacility\UniversitySportsFacilityController;
use App\Http\Controllers\University\CityController;
use App\Http\Controllers\University\ScienceFundingTypeController;
use App\Http\Controllers\University\UniversityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university'], function ($router) {
    Route::get('/', [UniversityController::class, 'index']);
    Route::post('/create', [UniversityController::class, 'create']);
    Route::put('/update/{university}', [UniversityController::class, 'update']);
    Route::delete('/delete/{university}', [UniversityController::class, 'delete']);
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'city'], function ($router) {
        Route::get('/', [CityController::class, 'index']);
        Route::post('/create', [CityController::class, 'create']);
        Route::put('/update/{city}', [CityController::class, 'update']);
        Route::delete('/delete/{city}', [CityController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'science-funding-type'], function ($router) {
        Route::get('/', [ScienceFundingTypeController::class, 'index']);
        Route::post('/create', [ScienceFundingTypeController::class, 'create']);
        Route::put('/update/{scienceFundingType}', [ScienceFundingTypeController::class, 'update']);
        Route::delete('/delete/{scienceFundingType}', [ScienceFundingTypeController::class, 'delete']);
    });
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'special-needs-condition'], function ($router) {
    Route::get('/', [SpecialNeedsConditionController::class, 'index']);
    Route::post('/create', [SpecialNeedsConditionController::class, 'create']);
    Route::put('/update/{specialNeedsCondition}', [SpecialNeedsConditionController::class, 'update']);
    Route::delete('/delete/{specialNeedsCondition}', [SpecialNeedsConditionController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'dormitory'], function ($router) {
    Route::get('/', [DormitoryController::class, 'index']);
    Route::post('/create', [DormitoryController::class, 'create']);
    Route::put('/update/{dormitory}', [DormitoryController::class, 'update']);
    Route::delete('/delete/{dormitory}', [DormitoryController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'dormitory-type'], function ($router) {
    Route::get('/', [DormitoryTypeController::class, 'index']);
    Route::post('/create', [DormitoryTypeController::class, 'create']);
    Route::put('/update/{dormitoryType}', [DormitoryTypeController::class, 'update']);
    Route::delete('/delete/{dormitoryType}', [DormitoryTypeController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-dormitory'], function ($router) {
    Route::get('/', [UniversityDormitoryController::class, 'index']);
    Route::post('/create', [UniversityDormitoryController::class, 'create']);
    Route::put('/update/{universityDormitory}', [UniversityDormitoryController::class, 'update']);
    Route::delete('/delete/{universityDormitory}', [UniversityDormitoryController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'department'], function ($router) {
    Route::get('/', [DepartmentController::class, 'index']);
    Route::post('/create', [DepartmentController::class, 'create']);
    Route::put('/update/{department}', [DepartmentController::class, 'update']);
    Route::delete('/delete/{department}', [DepartmentController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'accreditation'], function ($router) {
    Route::get('/', [AccreditationController::class, 'index']);
    Route::post('/create', [AccreditationController::class, 'create']);
    Route::put('/update/{accreditation}', [AccreditationController::class, 'update']);
    Route::delete('/delete/{accreditation}', [AccreditationController::class, 'delete']);
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'body'], function ($router) {
        Route::get('/', [AccreditationBodyController::class, 'index']);
        Route::post('/create', [AccreditationBodyController::class, 'create']);
        Route::put('/update/{accreditationBody}', [AccreditationBodyController::class, 'update']);
        Route::delete('/delete/{accreditationBody}', [AccreditationBodyController::class, 'delete']);
        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [AccreditationBodyTypeController::class, 'index']);
            Route::post('/create', [AccreditationBodyTypeController::class, 'create']);
            Route::put('/update/{accreditationBodyType}', [AccreditationBodyTypeController::class, 'update']);
            Route::delete('/delete/{accreditationBodyType}', [AccreditationBodyTypeController::class, 'delete']);
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
        Route::get('/', [AccreditationTypeController::class, 'index']);
        Route::post('/create', [AccreditationTypeController::class, 'create']);
        Route::put('/update/{accreditationType}', [AccreditationTypeController::class, 'update']);
        Route::delete('/delete/{accreditationType}', [AccreditationTypeController::class, 'delete']);
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
    Route::put('/update/{universityBuilding}', [UniversityBuildingController::class, 'update']);
    Route::delete('/delete/{universityBuilding}', [UniversityBuildingController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'research-work'], function ($router) {
    Route::get('/', [ResearchWorkController::class, 'index']);
    Route::post('/create', [ResearchWorkController::class, 'create']);
    Route::put('/update/{researchWork}', [ResearchWorkController::class, 'update']);
    Route::delete('/delete/{researchWork}', [ResearchWorkController::class, 'delete']);
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
        Route::get('/', [ResearchWorkTypeController::class, 'index']);
        Route::post('/create', [ResearchWorkTypeController::class, 'create']);
        Route::put('/update/{researchWorkType}', [ResearchWorkTypeController::class, 'update']);
        Route::delete('/delete/{researchWorkType}', [ResearchWorkTypeController::class, 'delete']);
    });
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'laboratory'], function ($router) {
    Route::get('/', [LaboratoryController::class, 'index']);
    Route::post('/create', [LaboratoryController::class, 'create']);
    Route::put('/update/{laboratory}', [LaboratoryController::class, 'update']);
    Route::delete('/delete/{laboratory}', [LaboratoryController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-laboratory'], function ($router) {
    Route::get('/', [UniversityLaboratoryController::class, 'index']);
    Route::post('/create', [UniversityLaboratoryController::class, 'create']);
    Route::put('/update/{universityLaboratory}', [UniversityLaboratoryController::class, 'update']);
    Route::delete('/delete/{universityLaboratory}', [UniversityLaboratoryController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'sports-facility'], function ($router) {
    Route::get('/', [SportsFacilityController::class, 'index']);
    Route::post('/create', [SportsFacilityController::class, 'create']);
    Route::put('/update/{sportsFacility}', [SportsFacilityController::class, 'update']);
    Route::delete('/delete/{sportsFacility}', [SportsFacilityController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university-sports-facility'], function ($router) {
    Route::get('/', [UniversitySportsFacilityController::class, 'index']);
    Route::post('/create', [UniversitySportsFacilityController::class, 'create']);
    Route::put('/update/{universitySportsFacility}', [UniversitySportsFacilityController::class, 'update']);
    Route::delete('/delete/{universitySportsFacility}', [UniversitySportsFacilityController::class, 'delete']);
});
