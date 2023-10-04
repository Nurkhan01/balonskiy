<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\Laboratory;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/university-laboratory/create",
 *     summary="Добавляет данные о лабораториях университетов",
 *     tags={"UniversityLaboratory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="laboratory_id", example="5", type="integer"),
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
 *     path="/api/university-laboratory",
 *     summary="Получает данные о лабораториях университетов",
 *     tags={"UniversityLaboratory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="laboratory_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/university-laboratory/update/{id}",
 *     summary="Обновляет данные о лабораториях университетов",
 *     tags={"UniversityLaboratory"},
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
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="laboratory_id", example="5", type="integer"),
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
 *     path="/api/university-laboratory/delete/{id}",
 *     summary="Удаляет данные о лабораториях университетов",
 *     tags={"UniversityLaboratory"},
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
class UniversityLaboratoryController extends Controller
{
}
