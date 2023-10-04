<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/education-module/create",
 *     summary="Добавляет данные о модулях образования",
 *     tags={"EducationModule"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="module", example="Some text", type="string"),
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="put_status", example="123", type="integer"),
 *                 @OA\Property(property="education_program_id", example="9", type="integer"),
 *                 @OA\Property(property="decree_goso_templates_id", example="10", type="integer"),
 *                 @OA\Property(property="description", example="Some text", type="string"),
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
 *     path="/api/education-module",
 *     summary="Получает данные о модулях образования",
 *     tags={"EducationModule"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/education-module/update/{id}",
 *     summary="Обновляет модуль образования",
 *     tags={"EducationModule"},
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
 *
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
 *     path="/api/education-module/delete/{id}",
 *     summary="Удаляет модуль образования",
 *     tags={"EducationModule"},
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
class EducationModuleController extends Controller
{
}
