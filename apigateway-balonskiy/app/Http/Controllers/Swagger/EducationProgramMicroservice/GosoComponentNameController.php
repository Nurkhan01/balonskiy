<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/goso-component-name/create",
 *     summary="Добавляет данные о компонентах ГОСО",
 *     tags={"GosoComponentName"},
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
 *     path="/api/goso-component-name",
 *     summary="Получает данные о компонентах ГОСО",
 *     tags={"GosoComponentName"},
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
 *     path="/api/goso-component-name/update/{id}",
 *     summary="Обновляет компоненты ГОСО",
 *     tags={"GosoComponentName"},
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
 *     path="/api/goso-component-name/delete/{id}",
 *     summary="Удаляет компоненты ГОСО",
 *     tags={"GosoComponentName"},
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
class GosoComponentNameController extends Controller
{
}
