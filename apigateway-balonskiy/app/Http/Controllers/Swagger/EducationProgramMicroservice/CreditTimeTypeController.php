<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
/**
 * @OA\Post(
 *     path="/api/credit-time-type/create",
 *     summary="Добавляет данные о типах кредитов",
 *     tags={"CregitTimeType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="is_standard", example="1", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
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
 *     path="/api/credit-time-type",
 *     summary="Получает данные о типах кредитов",
 *     tags={"CregitTimeType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                @OA\Property(property="is_standard", example="1", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/credit-time-type/update/{id}",
 *     summary="Обновляет типы кредитов",
 *     tags={"CregitTimeType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID образовательной программы",
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
 *                 @OA\Property(property="is_standard", example="1", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
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
 *     path="/api/credit-time-type/delete/{id}",
 *     summary="Удаляет типы кредитов",
 *     tags={"CregitTimeType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID образовательной программы",
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
class CreditTimeTypeController extends Controller
{

}
