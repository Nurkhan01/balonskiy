<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\SportsFacility;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/sports-facility/create",
 *     summary="Добавляет спортивные секции",
 *     tags={"SportsFacility"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Soccer", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
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
 *     path="/api/sports-facility",
 *     summary="Получает спортивные секции",
 *     tags={"SportsFacility"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Soccer", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/sports-facility/update/{id}",
 *     summary="Обновляет спортивные секции",
 *     tags={"SportsFacility"},
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
 *                 @OA\Property(property="name", example="Soccer", type="string"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
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
 *     path="/api/sports-facility/delete/{id}",
 *     summary="Удаляет спортивные секции",
 *     tags={"SportsFacility"},
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
class SportsFacilityController extends Controller
{
}
