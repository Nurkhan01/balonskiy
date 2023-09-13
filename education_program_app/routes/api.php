<?php

use App\Http\Controllers\CreditTimeTypeController;
use App\Http\Controllers\DecreeGosoTemplatesController;
use App\Http\Controllers\EducationDirectionController;
use App\Http\Controllers\EducationDisciplineController;
use App\Http\Controllers\EducationFieldController;
use App\Http\Controllers\EducationGroupController;
use App\Http\Controllers\EducationModuleController;
use App\Http\Controllers\EducationProgramAccreditationController;
use App\Http\Controllers\EducationProgramController;
use App\Http\Controllers\FormationEducationProgramController;
use App\Http\Controllers\GosoComponentNameController;
use App\Http\Controllers\GosoCycleNameController;
use App\Http\Controllers\GraduateDocumentTypeController;
use App\Http\Controllers\JointEducationProgramController;
use App\Http\Controllers\JointEpFinancingSourceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfessionalStandardController;
use App\Http\Controllers\StudyLevelController;
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

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-program'], function ($router) {
    Route::get('/', [EducationProgramController::class, 'index']);
    Route::post('/create', [EducationProgramController::class, 'create']);
    Route::put('/update/{educationProgram}', [EducationProgramController::class, 'update']);
    Route::delete('/delete/{educationProgram}', [EducationProgramController::class, 'delete']);
    Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'language'], function ($router) {
        Route::get('/', [LanguageController::class, 'index']);
        Route::post('/create', [LanguageController::class, 'create']);
        Route::put('/update/{language}', [LanguageController::class, 'update']);
        Route::delete('/delete/{language}', [LanguageController::class, 'delete']);
    });
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'study-level'], function ($router) {
    Route::get('/', [StudyLevelController::class, 'index']);
    Route::post('/create', [StudyLevelController::class, 'create']);
    Route::put('/update/{studyLevel}', [StudyLevelController::class, 'update']);
    Route::delete('/delete/{studyLevel}', [StudyLevelController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'professional-standard'], function ($router) {
    Route::get('/', [ProfessionalStandardController::class, 'index']);
    Route::post('/create', [ProfessionalStandardController::class, 'create']);
    Route::put('/update/{professionalStandard}', [ProfessionalStandardController::class, 'update']);
    Route::delete('/delete/{professionalStandard}', [ProfessionalStandardController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-direction'], function ($router) {
    Route::get('/', [EducationDirectionController::class, 'index']);
    Route::post('/create', [EducationDirectionController::class, 'create']);
    Route::put('/update/{educationDirection}', [EducationDirectionController::class, 'update']);
    Route::delete('/delete/{educationDirection}', [EducationDirectionController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-group'], function ($router) {
    Route::get('/', [EducationGroupController::class, 'index']);
    Route::post('/create', [EducationGroupController::class, 'create']);
    Route::put('/update/{educationGroup}', [EducationGroupController::class, 'update']);
    Route::delete('/delete/{educationGroup}', [EducationGroupController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-field'], function ($router) {
    Route::get('/', [EducationFieldController::class, 'index']);
    Route::post('/create', [EducationFieldController::class, 'create']);
    Route::put('/update/{educationField}', [EducationFieldController::class, 'update']);
    Route::delete('/delete/{educationField}', [EducationFieldController::class, 'delete']);
});





Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'credit-time-type'], function ($router) {
    Route::get('/', [CreditTimeTypeController::class, 'index']);
    Route::post('/create', [CreditTimeTypeController::class, 'create']);
    Route::put('/update/{dataId}', [CreditTimeTypeController::class, 'update']);
    Route::delete('/delete/{dataId}', [CreditTimeTypeController::class, 'delete']);
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'decree-goso-templates'], function ($router) {
    Route::get('/', [DecreeGosoTemplatesController::class, 'index']);
    Route::post('/create', [DecreeGosoTemplatesController::class, 'create']);
    Route::put('/update/{dataId}', [DecreeGosoTemplatesController::class, 'update']);
    Route::delete('/delete/{dataId}', [DecreeGosoTemplatesController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-discipline'], function ($router) {
    Route::get('/', [EducationDisciplineController::class, 'index']);
    Route::post('/create', [EducationDisciplineController::class, 'create']);
    Route::put('/update/{dataId}', [EducationDisciplineController::class, 'update']);
    Route::delete('/delete/{dataId}', [EducationDisciplineController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'education-module'], function ($router) {
    Route::get('/', [EducationModuleController::class, 'index']);
    Route::post('/create', [EducationModuleController::class, 'create']);
    Route::put('/update/{dataId}', [EducationModuleController::class, 'update']);
    Route::delete('/delete/{dataId}', [EducationModuleController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'formation-education-program'], function ($router) {
    Route::get('/', [FormationEducationProgramController::class, 'index']);
    Route::post('/create', [FormationEducationProgramController::class, 'create']);
    Route::put('/update/{dataId}', [FormationEducationProgramController::class, 'update']);
    Route::delete('/delete/{dataId}', [FormationEducationProgramController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'goso-component-name'], function ($router) {
    Route::get('/', [GosoComponentNameController::class, 'index']);
    Route::post('/create', [GosoComponentNameController::class, 'create']);
    Route::put('/update/{dataId}', [GosoComponentNameController::class, 'update']);
    Route::delete('/delete/{dataId}', [GosoComponentNameController::class, 'delete']);
});
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'goso-cycle-name'], function ($router) {
    Route::get('/', [GosoCycleNameController::class, 'index']);
    Route::post('/create', [GosoCycleNameController::class, 'create']);
    Route::put('/update/{dataId}', [GosoCycleNameController::class, 'update']);
    Route::delete('/delete/{dataId}', [GosoCycleNameController::class, 'delete']);
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
