<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\SpecialNeedsCondition;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/special-needs-condition/create",
 *     summary="Добавляет данные о состоянии особых потребностей",
 *     tags={"SpecialNeedsCondition"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="entrance_count", example="3", type="integer"),
 *                 @OA\Property(property="sanitary_facilities_count", example="50", type="integer"),
 *                 @OA\Property(property="help_button_count", example="5", type="integer"),
 *                 @OA\Property(property="has_ramps__or_lifts", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_with_handrails", example="1", type="integer"),
 *                 @OA\Property(property="has_special_parkings", example="1", type="integer"),
 *                 @OA\Property(property="has_navigation_means", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_constrast_color", example="1", type="integer"),
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
 *     path="/api/special-needs-condition",
 *     summary="Получает данные о состоянии особых потребностей",
 *     tags={"SpecialNeedsCondition"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="entrance_count", example="3", type="integer"),
 *                 @OA\Property(property="sanitary_facilities_count", example="50", type="integer"),
 *                 @OA\Property(property="help_button_count", example="5", type="integer"),
 *                 @OA\Property(property="has_ramps__or_lifts", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_with_handrails", example="1", type="integer"),
 *                 @OA\Property(property="has_special_parkings", example="1", type="integer"),
 *                 @OA\Property(property="has_navigation_means", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_constrast_color", example="1", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/special-needs-condition/update/{id}",
 *     summary="Обновляет данные о состоянии особых потребностей",
 *     tags={"SpecialNeedsCondition"},
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
 *                 @OA\Property(property="entrance_count", example="3", type="integer"),
 *                 @OA\Property(property="sanitary_facilities_count", example="50", type="integer"),
 *                 @OA\Property(property="help_button_count", example="5", type="integer"),
 *                 @OA\Property(property="has_ramps__or_lifts", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_with_handrails", example="1", type="integer"),
 *                 @OA\Property(property="has_special_parkings", example="1", type="integer"),
 *                 @OA\Property(property="has_navigation_means", example="1", type="integer"),
 *                 @OA\Property(property="has_stairs_constrast_color", example="1", type="integer"),
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
 *     path="/api/special-needs-condition/delete/{id}",
 *     summary="Удаляет данные о состоянии особых потребностей",
 *     tags={"SpecialNeedsCondition"},
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
class SpecialNeedsConditionController extends Controller
{
}
