<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationProgramMicroservice\LanguageRequest;
use App\Http\Requests\EducationProgramMicroservice\ProfessionalStandardRequest;
/**
 * @OA\Post(
 *     path="/api/professional-standard/create",
 *     summary="Добавляет данные",
 *     tags={"ProfessionalStandard"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="order_number", example="123", type="integer"),
 *                 @OA\Property(property="order_date", example="123", type="string"),
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
 *     path="/api/professional-standard",
 *     summary="Получает данные ",
 *     tags={"ProfessionalStandard"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="order_number", example="123", type="integer"),
 *                 @OA\Property(property="order_date", example="123", type="string"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/professional-standard/update/{id}",
 *     summary="Обновляет ",
 *     tags={"ProfessionalStandard"},
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
 *                 @OA\Property(property="order_number", example="123", type="integer"),
 *                 @OA\Property(property="order_date", example="123", type="string"),
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
 *     path="/api/professional-standard/delete/{id}",
 *     summary="Удаляет",
 *     tags={"ProfessionalStandard"},
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
class ProfessionalStandardController extends Controller
{
}
