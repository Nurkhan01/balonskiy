<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\University;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/university/create",
 *     summary="Добавляет данные университетов",
 *     tags={"University"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="UIB", type="string"),
 *                 @OA\Property(property="city_id", example="1", type="integer"),
 *                 @OA\Property(property="computers_count", example="50", type="integer"),
 *                 @OA\Property(property="internet_points_number", example="50", type="integer"),
 *                 @OA\Property(property="internet_speed", example="500", type="integer"),
 *                 @OA\Property(property="intercollegiate_library_access", example="50", type="integer"),
 *                 @OA\Property(property="total_grant_funding", example="50", type="integer"),
 *                 @OA\Property(property="email", example="@uib.kz", type="string"),
 *                 @OA\Property(property="has_corporate_governance_bodies", example="0", type="integer"),
 *                 @OA\Property(property="science_funding_amount", example="50", type="integer"),
 *                 @OA\Property(property="science_funding_type_id", example="5", type="integer"),
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
 *     path="/api/university",
 *     summary="Получает данные университетов",
 *     tags={"University"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="UIB", type="string"),
 *                 @OA\Property(property="city_id", example="1", type="integer"),
 *                 @OA\Property(property="computers_count", example="50", type="integer"),
 *                 @OA\Property(property="internet_points_number", example="50", type="integer"),
 *                 @OA\Property(property="internet_speed", example="500", type="integer"),
 *                 @OA\Property(property="intercollegiate_library_access", example="50", type="integer"),
 *                 @OA\Property(property="total_grant_funding", example="50", type="integer"),
 *                 @OA\Property(property="email", example="@uib.kz", type="string"),
 *                 @OA\Property(property="has_corporate_governance_bodies", example="0", type="integer"),
 *                 @OA\Property(property="science_funding_amount", example="50", type="integer"),
 *                 @OA\Property(property="science_funding_type_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/university/update/{id}",
 *     summary="Обновляет данные университетов",
 *     tags={"University"},
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
 *                 @OA\Property(property="name", example="UIB", type="string"),
 *                 @OA\Property(property="city_id", example="1", type="integer"),
 *                 @OA\Property(property="computers_count", example="50", type="integer"),
 *                 @OA\Property(property="internet_points_number", example="50", type="integer"),
 *                 @OA\Property(property="internet_speed", example="500", type="integer"),
 *                 @OA\Property(property="intercollegiate_library_access", example="50", type="integer"),
 *                 @OA\Property(property="total_grant_funding", example="50", type="integer"),
 *                 @OA\Property(property="email", example="@uib.kz", type="string"),
 *                 @OA\Property(property="has_corporate_governance_bodies", example="0", type="integer"),
 *                 @OA\Property(property="science_funding_amount", example="50", type="integer"),
 *                 @OA\Property(property="science_funding_type_id", example="5", type="integer"),
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
 *     path="/api/university/delete/{id}",
 *     summary="Удаляет данные университетов",
 *     tags={"University"},
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
class UniversityController extends Controller
{
}
