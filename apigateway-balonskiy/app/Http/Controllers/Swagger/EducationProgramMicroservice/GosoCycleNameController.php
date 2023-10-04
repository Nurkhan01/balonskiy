<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/goso-cycle-name/create",
 *     summary="Добавляет данные о циклах ГОСО",
 *     tags={"GosoCycleName"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="short_name", example="Some text", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
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
 *     path="/api/goso-cycle-name",
 *     summary="Получает данные о циклах ГОСО",
 *     tags={"GosoCycleName"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="short_name", example="Some text", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/goso-cycle-name/update/{id}",
 *     summary="Обновляет циклы ГОСО",
 *     tags={"GosoCycleName"},
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
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="short_name", example="Some text", type="string"),
 *                 @OA\Property(property="study_level_id", example="5", type="integer"),
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
 *     path="/api/goso-cycle-name/delete/{id}",
 *     summary="Удаляет циклы ГОСО",
 *     tags={"GosoCycleName"},
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
class GosoCycleNameController extends Controller
{
}
