<?php

use App\Http\Controllers\Teacher\CitizenshipController;
use App\Http\Controllers\Teacher\CountryController;
use App\Http\Controllers\Teacher\DegreeController;
use App\Http\Controllers\Teacher\EnglishLevelController;
use App\Http\Controllers\Teacher\ForeignTeacherConsultationController;
use App\Http\Controllers\Teacher\ForeignTeacherController;
use App\Http\Controllers\Teacher\Publication\JournalController;
use App\Http\Controllers\Teacher\Publication\PublicationController;
use App\Http\Controllers\Teacher\Publication\ScienceFieldController;
use App\Http\Controllers\Teacher\Publication\TeacherPublicationController;
use App\Http\Controllers\Teacher\TeacherFinancingTypeController;
use App\Http\Controllers\Teacher\TeacherLanguageController;
use App\Http\Controllers\Teacher\TeacherUniversityController;
use App\Http\Controllers\Teacher\Training\TeacherTrainingController;
use App\Http\Controllers\Teacher\Training\TrainingBasisController;
use App\Http\Controllers\Teacher\Training\TrainingController;
use App\Http\Controllers\Teacher\Training\TrainingFieldController;
use App\Http\Controllers\Teacher\Training\TrainingFormController;
use App\Http\Controllers\Teacher\Training\TrainingPaymentTypeController;
use App\Http\Controllers\TeacherDataController;
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
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'teacher'], function ($router) {
    Route::get('/', [TeacherDataController::class, 'index']);
    Route::post('/create', [TeacherDataController::class, 'create']);
    Route::put('/update/{dataId}', [TeacherDataController::class, 'update']);
    Route::delete('/delete/{dataId}', [TeacherDataController::class, 'delete']);

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'citizenship'], function ($router) {
        Route::get('/', [CitizenshipController::class, 'index']);
        Route::post('/create', [CitizenshipController::class, 'create']);
        Route::put('/update/{dataId}', [CitizenshipController::class, 'update']);
        Route::delete('/delete/{dataId}', [CitizenshipController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'degree'], function ($router) {
        Route::get('/', [DegreeController::class, 'index']);
        Route::post('/create', [DegreeController::class, 'create']);
        Route::put('/update/{dataId}', [DegreeController::class, 'update']);
        Route::delete('/delete/{dataId}', [DegreeController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'language'], function ($router) {
        Route::get('/', [TeacherLanguageController::class, 'index']);
        Route::post('/create', [TeacherLanguageController::class, 'create']);
        Route::put('/update/{dataId}', [TeacherLanguageController::class, 'update']);
        Route::delete('/delete/{dataId}', [TeacherLanguageController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'university'], function ($router) {
        Route::get('/', [TeacherUniversityController::class, 'index']);
        Route::post('/create', [TeacherUniversityController::class, 'create']);
        Route::put('/update/{dataId}', [TeacherUniversityController::class, 'update']);
        Route::delete('/delete/{dataId}', [TeacherUniversityController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'training'], function ($router) {
        Route::get('/', [TeacherTrainingController::class, 'index']);
        Route::post('/create', [TeacherTrainingController::class, 'create']);
        Route::put('/update/{dataId}', [TeacherTrainingController::class, 'update']);
        Route::delete('/delete/{dataId}', [TeacherTrainingController::class, 'delete']);
    });

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'publication'], function ($router) {
        Route::get('/', [TeacherPublicationController::class, 'index']);
        Route::post('/create', [TeacherPublicationController::class, 'create']);
        Route::put('/update/{dataId}', [TeacherPublicationController::class, 'update']);
        Route::delete('/delete/{dataId}', [TeacherPublicationController::class, 'delete']);
    });
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'training'], function ($router) {
    Route::get('/', [TrainingController::class, 'index']);
    Route::post('/create', [TrainingController::class, 'create']);
    Route::put('/update/{dataId}', [TrainingController::class, 'update']);
    Route::delete('/delete/{dataId}', [TrainingController::class, 'delete']);

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'basis'], function ($router) {
        Route::get('/', [TrainingBasisController::class, 'index']);
        Route::post('/create', [TrainingBasisController::class, 'create']);
        Route::put('/update/{dataId}', [TrainingBasisController::class, 'update']);
        Route::delete('/delete/{dataId}', [TrainingBasisController::class, 'delete']);
    });


    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'form'], function ($router) {
        Route::get('/', [TrainingFormController::class, 'index']);
        Route::post('/create', [TrainingFormController::class, 'create']);
        Route::put('/update/{dataId}', [TrainingFormController::class, 'update']);
        Route::delete('/delete/{dataId}', [TrainingFormController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'payment-type'], function ($router) {
        Route::get('/', [TrainingPaymentTypeController::class, 'index']);
        Route::post('/create', [TrainingPaymentTypeController::class, 'create']);
        Route::put('/update/{dataId}', [TrainingPaymentTypeController::class, 'update']);
        Route::delete('/delete/{dataId}', [TrainingPaymentTypeController::class, 'delete']);
    });
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'publication'], function ($router) {
    Route::get('/', [PublicationController::class, 'index']);
    Route::post('/create', [PublicationController::class, 'create']);
    Route::put('/update/{dataId}', [PublicationController::class, 'update']);
    Route::delete('/delete/{dataId}', [PublicationController::class, 'delete']);

    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'journal'], function ($router) {
        Route::get('/', [JournalController::class, 'index']);
        Route::post('/create', [JournalController::class, 'create']);
        Route::put('/update/{dataId}', [JournalController::class, 'update']);
        Route::delete('/delete/{dataId}', [JournalController::class, 'delete']);
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'science-field'], function ($router) {
        Route::get('/', [ScienceFieldController::class, 'index']);
        Route::post('/create', [ScienceFieldController::class, 'create']);
        Route::put('/update/{dataId}', [ScienceFieldController::class, 'update']);
        Route::delete('/delete/{dataId}', [ScienceFieldController::class, 'delete']);
    });
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'english-level'], function ($router) {
    Route::get('/', [EnglishLevelController::class, 'index']);
    Route::post('/create', [EnglishLevelController::class, 'create']);
    Route::put('/update/{dataId}', [EnglishLevelController::class, 'update']);
    Route::delete('/delete/{dataId}', [EnglishLevelController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'teacher-financing-type'], function ($router) {
    Route::get('/', [TeacherFinancingTypeController::class, 'index']);
    Route::post('/create', [TeacherFinancingTypeController::class, 'create']);
    Route::put('/update/{dataId}', [TeacherFinancingTypeController::class, 'update']);
    Route::delete('/delete/{dataId}', [TeacherFinancingTypeController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'country'], function ($router) {
    Route::get('/', [CountryController::class, 'index']);
    Route::post('/create', [CountryController::class, 'create']);
    Route::put('/update/{dataId}', [CountryController::class, 'update']);
    Route::delete('/delete/{dataId}', [CountryController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'foreign-teacher'], function ($router) {
    Route::get('/', [ForeignTeacherController::class, 'index']);
    Route::post('/create', [ForeignTeacherController::class, 'create']);
    Route::put('/update/{dataId}', [ForeignTeacherController::class, 'update']);
    Route::delete('/delete/{dataId}', [ForeignTeacherController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'foreign-teacher-consultation'], function ($router) {
    Route::get('/', [ForeignTeacherConsultationController::class, 'index']);
    Route::post('/create', [ForeignTeacherConsultationController::class, 'create']);
    Route::put('/update/{dataId}', [ForeignTeacherConsultationController::class, 'update']);
    Route::delete('/delete/{dataId}', [ForeignTeacherConsultationController::class, 'delete']);
});
