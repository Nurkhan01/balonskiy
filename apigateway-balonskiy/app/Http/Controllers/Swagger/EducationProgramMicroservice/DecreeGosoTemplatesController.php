<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
/**
 * @OA\Post(
 *     path="/api/decree-goso-templates/create",
 *     summary="Добавляет данные об образцах указов ГОСО",
 *     tags={"DecreeGosoTemplates"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="decree", example="Some text", type="string"),
 *                 @OA\Property(property="date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="status", example="123", type="integer"),
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
 *     path="/api/decree-goso-templates",
 *     summary="Получает данные о типах кредитов",
 *     tags={"DecreeGosoTemplates"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="decree", example="Some text", type="string"),
 *                 @OA\Property(property="date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="status", example="123", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/decree-goso-templates/update/{id}",
 *     summary="Обновляет образец указа ГОСО",
 *     tags={"DecreeGosoTemplates"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID образца указов ГОСО",
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
 *                 @OA\Property(property="decree", example="Some text", type="string"),
 *                 @OA\Property(property="date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="status", example="123", type="integer"),
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
 *     path="/api/decree-goso-templates/delete/{id}",
 *     summary="Удаляет образец указа ГОСО",
 *     tags={"DecreeGosoTemplates"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID образца указов ГОСО",
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
class DecreeGosoTemplatesController extends Controller
{
}
