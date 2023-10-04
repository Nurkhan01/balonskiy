<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\Building;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/building/create",
 *     summary="Добавляет данные о здании",
 *     tags={"Building"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="type", example="Some text", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="total_area", example="500", type="integer"),
 *                 @OA\Property(property="classroom_area", example="500", type="integer"),
 *                 @OA\Property(property="non_classroom_area", example="500", type="integer"),
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
 *     path="/api/building",
 *     summary="Получает данные о здании",
 *     tags={"Building"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="type", example="Some text", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="total_area", example="500", type="integer"),
 *                 @OA\Property(property="classroom_area", example="500", type="integer"),
 *                 @OA\Property(property="non_classroom_area", example="500", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/building/update/{id}",
 *     summary="Обновляет данные о здании",
 *     tags={"Building"},
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
 *                 @OA\Property(property="type", example="Some text", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="total_area", example="500", type="integer"),
 *                 @OA\Property(property="classroom_area", example="500", type="integer"),
 *                 @OA\Property(property="non_classroom_area", example="500", type="integer"),
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
 *     path="/api/building/delete/{id}",
 *     summary="Удаляет данные о здании",
 *     tags={"Building"},
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
class BuildingController extends Controller
{
}
