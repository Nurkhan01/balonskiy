<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\Dormitory;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/university-dormitory/create",
 *     summary="Добавляет данные о общежитиях университета",
 *     tags={"UniversityDormitory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="dormitory_id", example="5", type="string"),
 *                 @OA\Property(property="university_id", example="5", type="integer"),
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
 *     path="/api/university-dormitory",
 *     summary="Получает данные о общежитиях университета",
 *     tags={"UniversityDormitory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="dormitory_id", example="5", type="string"),
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/university-dormitory/update/{id}",
 *     summary="Обновляет данные о общежитиях университета",
 *     tags={"UniversityDormitory"},
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
 *                 @OA\Property(property="dormitory_id", example="5", type="string"),
 *                 @OA\Property(property="university_id", example="5", type="integer"),
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
 *     path="/api/university-dormitory/delete/{id}",
 *     summary="Удаляет данные о общежитиях университета",
 *     tags={"UniversityDormitory"},
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
class UniversityDormitoryController extends Controller
{
}
