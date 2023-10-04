<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\Dormitory;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/dormitory/create",
 *     summary="Добавляет данные о общежитиях",
 *     tags={"Dormitory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="dormitory_type_id", example="5", type="integer"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
 *                 @OA\Property(property="payment_per_month", example="5", type="integer"),
 *                 @OA\Property(property="payment_per_year", example="2023", type="integer"),
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
 *     path="/api/dormitory",
 *     summary="Получает данные о общежитиях",
 *     tags={"Dormitory"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="dormitory_type_id", example="5", type="integer"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
 *                 @OA\Property(property="payment_per_month", example="5", type="integer"),
 *                 @OA\Property(property="payment_per_year", example="2023", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/dormitory/update/{id}",
 *     summary="Обновляет данные о общежитиях",
 *     tags={"Dormitory"},
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
 *                 @OA\Property(property="dormitory_type_id", example="5", type="integer"),
 *                 @OA\Property(property="expluatation_start_year", example="2018", type="integer"),
 *                 @OA\Property(property="area", example="500", type="integer"),
 *                 @OA\Property(property="payment_per_month", example="5", type="integer"),
 *                 @OA\Property(property="payment_per_year", example="2023", type="integer"),
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
 *     path="/api/dormitory/delete/{id}",
 *     summary="Удаляет данные о общежитиях",
 *     tags={"Dormitory"},
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
class DormitoryController extends Controller
{
}
