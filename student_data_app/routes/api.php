<?php

use App\Http\Controllers\Mobility\AgreementTypeController;
use App\Http\Controllers\Mobility\Country\CountryController;
use App\Http\Controllers\Mobility\Country\CountryTypeController;
use App\Http\Controllers\Mobility\MobilityPaymentTypeController;
use App\Http\Controllers\Mobility\MobilityTypeController;
use App\Http\Controllers\MobilityController;
use App\Http\Controllers\Student\DevelopingSection\CompetitionWinnerController;
use App\Http\Controllers\Student\DevelopingSection\DevelopingSectionController;
use App\Http\Controllers\Student\DevelopingSection\DevelopmentSectionTypeController;
use App\Http\Controllers\Student\DevelopingSection\StudentDevelopingSectionController;
use App\Http\Controllers\Student\DisabilityCategoryController;
use App\Http\Controllers\Student\Employment\EmploymentController;
use App\Http\Controllers\Student\Employment\StudentEmploymentController;
use App\Http\Controllers\Student\EmploymentStatusController;
use App\Http\Controllers\Student\EnrollStatusController;
use App\Http\Controllers\Student\NationalityController;
use App\Http\Controllers\Student\PaymentTypeController;
use App\Http\Controllers\Student\StudentDisabilityController;
use App\Http\Controllers\Student\StudentLocationTypeController;
use App\Http\Controllers\Student\StudentSportsCategoryController;
use App\Http\Controllers\Student\StudyFormController;
use App\Http\Controllers\StudentDataController;
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

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student-data'], function ($router) {
    Route::get('/', [StudentDataController::class, 'index']);
    Route::post('/create', [StudentDataController::class, 'create']);
    Route::put('/update/{studentData}', [StudentDataController::class, 'update']);
    Route::delete('/delete/{studentData}', [StudentDataController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student'], function ($router) {
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'disability-category'], function ($router) {
        Route::get('/', [DisabilityCategoryController::class, 'index']);
        Route::post('/create', [DisabilityCategoryController::class, 'create']);
        Route::put('/update/{disabilityCategory}', [DisabilityCategoryController::class, 'update']);
        Route::delete('/delete/{disabilityCategory}', [DisabilityCategoryController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment-status'], function ($router) {
        Route::get('/', [EmploymentStatusController::class, 'index']);
        Route::post('/create', [EmploymentStatusController::class, 'create']);
        Route::put('/update/{employmentStatus}', [EmploymentStatusController::class, 'update']);
        Route::delete('/delete/{employmentStatus}', [EmploymentStatusController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'enroll-status'], function ($router) {
        Route::get('/', [EnrollStatusController::class, 'index']);
        Route::post('/create', [EnrollStatusController::class, 'create']);
        Route::put('/update/{enrollStatus}', [EnrollStatusController::class, 'update']);
        Route::delete('/delete/{enrollStatus}', [EnrollStatusController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'nationality'], function ($router) {
        Route::get('/', [NationalityController::class, 'index']);
        Route::post('/create', [NationalityController::class, 'create']);
        Route::put('/update/{nationality}', [NationalityController::class, 'update']);
        Route::delete('/delete/{nationality}', [NationalityController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'payment-type'], function ($router) {
        Route::get('/', [PaymentTypeController::class, 'index']);
        Route::post('/create', [PaymentTypeController::class, 'create']);
        Route::put('/update/{paymentType}', [PaymentTypeController::class, 'update']);
        Route::delete('/delete/{paymentType}', [PaymentTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'location-type'], function ($router) {
        Route::get('/', [StudentLocationTypeController::class, 'index']);
        Route::post('/create', [StudentLocationTypeController::class, 'create']);
        Route::put('/update/{studentLocationType}', [StudentLocationTypeController::class, 'update']);
        Route::delete('/delete/{studentLocationType}', [StudentLocationTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'sports-category'], function ($router) {
        Route::get('/', [StudentSportsCategoryController::class, 'index']);
        Route::post('/create', [StudentSportsCategoryController::class, 'create']);
        Route::put('/update/{studentSportsCategory}', [StudentSportsCategoryController::class, 'update']);
        Route::delete('/delete/{studentSportsCategory}', [StudentSportsCategoryController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'study-form'], function ($router) {
        Route::get('/', [StudyFormController::class, 'index']);
        Route::post('/create', [StudyFormController::class, 'create']);
        Route::put('/update/{studyForm}', [StudyFormController::class, 'update']);
        Route::delete('/delete/{studyForm}', [StudyFormController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment'], function ($router) {
        Route::get('/', [StudentEmploymentController::class, 'index']);
        Route::post('/create', [StudentEmploymentController::class, 'create']);
        Route::put('/update/{studentEmployment}', [StudentEmploymentController::class, 'update']);
        Route::delete('/delete/{studentEmployment}', [StudentEmploymentController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'disability'], function ($router) {
        Route::get('/', [StudentDisabilityController::class, 'index']);
        Route::post('/create', [StudentDisabilityController::class, 'create']);
        Route::put('/update/{studentDisability}', [StudentDisabilityController::class, 'update']);
        Route::delete('/delete/{studentDisability}', [StudentDisabilityController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'developing-section'], function ($router) {
        Route::get('/', [StudentDevelopingSectionController::class, 'index']);
        Route::post('/create', [StudentDevelopingSectionController::class, 'create']);
        Route::put('/update/{studentDevelopingSection}', [StudentDevelopingSectionController::class, 'update']);
        Route::delete('/delete/{studentDevelopingSection}', [StudentDevelopingSectionController::class, 'delete']);
    });
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'mobility'], function ($router) {
    Route::get('/', [MobilityController::class, 'index']);
    Route::post('/create', [MobilityController::class, 'create']);
    Route::put('/update/{mobility}', [MobilityController::class, 'update']);
    Route::delete('/delete/{mobility}', [MobilityController::class, 'delete']);

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
        Route::get('/', [MobilityTypeController::class, 'index']);
        Route::post('/create', [MobilityTypeController::class, 'create']);
        Route::put('/update/{mobilityType}', [MobilityTypeController::class, 'update']);
        Route::delete('/delete/{mobilityType}', [MobilityTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'payment-type'], function ($router) {
        Route::get('/', [MobilityPaymentTypeController::class, 'index']);
        Route::post('/create', [MobilityPaymentTypeController::class, 'create']);
        Route::put('/update/{mobilityPaymentType}', [MobilityPaymentTypeController::class, 'update']);
        Route::delete('/delete/{mobilityPaymentType}', [MobilityPaymentTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'agreement-type'], function ($router) {
        Route::get('/', [AgreementTypeController::class, 'index']);
        Route::post('/create', [AgreementTypeController::class, 'create']);
        Route::put('/update/{agreementType}', [AgreementTypeController::class, 'update']);
        Route::delete('/delete/{agreementType}', [AgreementTypeController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'country'], function ($router) {
        Route::get('/', [CountryController::class, 'index']);
        Route::post('/create', [CountryController::class, 'create']);
        Route::put('/update/{country}', [CountryController::class, 'update']);
        Route::delete('/delete/{country}', [CountryController::class, 'delete']);

        Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
            Route::get('/', [CountryTypeController::class, 'index']);
            Route::post('/create', [CountryTypeController::class, 'create']);
            Route::put('/update/{countryType}', [CountryTypeController::class, 'update']);
            Route::delete('/delete/{countryType}', [CountryTypeController::class, 'delete']);
        });
    });
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'employment'], function ($router) {
    Route::get('/', [EmploymentController::class, 'index']);
    Route::post('/create', [EmploymentController::class, 'create']);
    Route::put('/update/{employment}', [EmploymentController::class, 'update']);
    Route::delete('/delete/{employment}', [EmploymentController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'developing-section'], function ($router) {
    Route::get('/', [DevelopingSectionController::class, 'index']);
    Route::post('/create', [DevelopingSectionController::class, 'create']);
    Route::put('/update/{developingSection}', [DevelopingSectionController::class, 'update']);
    Route::delete('/delete/{developingSection}', [DevelopingSectionController::class, 'delete']);

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'type'], function ($router) {
        Route::get('/', [DevelopmentSectionTypeController::class, 'index']);
        Route::post('/create', [DevelopmentSectionTypeController::class, 'create']);
        Route::put('/update/{developmentSectionType}', [DevelopmentSectionTypeController::class, 'update']);
        Route::delete('/delete/{developmentSectionType}', [DevelopmentSectionTypeController::class, 'delete']);
    });
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'competition-winner'], function ($router) {
    Route::get('/', [CompetitionWinnerController::class, 'index']);
    Route::post('/create', [CompetitionWinnerController::class, 'create']);
    Route::put('/update/{competitionWinner}', [CompetitionWinnerController::class, 'update']);
    Route::delete('/delete/{competitionWinner}', [CompetitionWinnerController::class, 'delete']);
});
