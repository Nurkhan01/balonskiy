<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationProgramMicroservice\EducationDisciplineRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/education-discipline/create",
 *     summary="Добавляет данные об образовательных дисциплинах",
 *     tags={"EducationDiscipline"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="department_id", example="5", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="name", example="Разработка корпаротивных приложении", type="string"),
 *                 @OA\Property(property="description", example="Разработка корпаротивных приложении на фреймворках VUE и Laravel", type="string"),
 *                 @OA\Property(property="knowledge", example="VUE и Laravel", type="string"),
 *                 @OA\Property(property="abilities", example="VUE и Laravel разработка", type="string"),
 *                 @OA\Property(property="recommendation", example="Базовые знания JS PHP SQL", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
 *                 @OA\Property(property="education_language", example="English", type="string"),
 *                 @OA\Property(property="is_thread", example="1", type="integer"),
 *                 @OA\Property(property="is_selectable", example="1", type="integer"),
 *                 @OA\Property(property="need_computer", example="1", type="integer"),
 *                 @OA\Property(property="is_multilanguage", example="1", type="integer"),
 *                 @OA\Property(property="is_kazakh", example="1", type="integer"),
 *                 @OA\Property(property="is_russian", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_not_remote", example="1", type="integer"),
 *                 @OA\Property(property="is_mook", example="0", type="integer"),
 *                 @OA\Property(property="mook_platform_name", example="0", type="string"),
 *                 @OA\Property(property="mook_cource_duration", example="0", type="string"),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="message", example="Data added successfully", type="string"),
 *         )
 *     )
 * ),
 * @OA\Get(
 *     path="/api/education-discipline",
 *     summary="Получает данные об образовательных дисциплинах",
 *     tags={"EducationDiscipline"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="department_id", example="5", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="name", example="Разработка корпаротивных приложении", type="string"),
 *                 @OA\Property(property="description", example="Разработка корпаротивных приложении на фреймворках VUE и Laravel", type="string"),
 *                 @OA\Property(property="knowledge", example="VUE и Laravel", type="string"),
 *                 @OA\Property(property="abilities", example="VUE и Laravel разработка", type="string"),
 *                 @OA\Property(property="recommendation", example="Базовые знания JS PHP SQL", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
 *                 @OA\Property(property="education_language", example="English", type="string"),
 *                 @OA\Property(property="is_thread", example="1", type="integer"),
 *                 @OA\Property(property="is_selectable", example="1", type="integer"),
 *                 @OA\Property(property="need_computer", example="1", type="integer"),
 *                 @OA\Property(property="is_multilanguage", example="1", type="integer"),
 *                 @OA\Property(property="is_kazakh", example="1", type="integer"),
 *                 @OA\Property(property="is_russian", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_not_remote", example="1", type="integer"),
 *                 @OA\Property(property="is_mook", example="0", type="integer"),
 *                 @OA\Property(property="mook_platform_name", example="0", type="string"),
 *                 @OA\Property(property="mook_cource_duration", example="0", type="string"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/education-discipline/update/{id}",
 *     summary="Обновляет образовательную дисциплину",
 *     tags={"EducationDiscipline"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="integer"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *     ),
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="department_id", example="5", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="name", example="Разработка корпаротивных приложении", type="string"),
 *                 @OA\Property(property="description", example="Разработка корпаротивных приложении на фреймворках VUE и Laravel", type="string"),
 *                 @OA\Property(property="knowledge", example="VUE и Laravel", type="string"),
 *                 @OA\Property(property="abilities", example="VUE и Laravel разработка", type="string"),
 *                 @OA\Property(property="recommendation", example="Базовые знания JS PHP SQL", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
 *                 @OA\Property(property="education_language", example="English", type="string"),
 *                 @OA\Property(property="is_thread", example="1", type="integer"),
 *                 @OA\Property(property="is_selectable", example="1", type="integer"),
 *                 @OA\Property(property="need_computer", example="1", type="integer"),
 *                 @OA\Property(property="is_multilanguage", example="1", type="integer"),
 *                 @OA\Property(property="is_kazakh", example="1", type="integer"),
 *                 @OA\Property(property="is_russian", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_not_remote", example="1", type="integer"),
 *                 @OA\Property(property="is_mook", example="0", type="integer"),
 *                 @OA\Property(property="mook_platform_name", example="0", type="string"),
 *                 @OA\Property(property="mook_cource_duration", example="0", type="string"),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="message", example="Data updated successfully", type="string"),
 *         )
 *     )
 * ),
 * @OA\Delete(
 *     path="/api/education-discipline/delete/{id}",
 *     summary="Удаляет образовательную дисциплину",
 *     tags={"EducationDiscipline"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID",
 *         in="path",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="integer"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="message", example="Data has been deleted", type="string"),
 *         )
 *     )
 * )
 */
class EducationDisciplineController extends Controller
{
}
