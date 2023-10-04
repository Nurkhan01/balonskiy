<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\Accreditation;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/accreditation/create",
 *     summary="Добавляет данные об аккредитации",
 *     tags={"Accreditation"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
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
 *     path="/api/accreditation",
 *     summary="Получает данные об аккредитации",
 *     tags={"Accreditation"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/accreditation/update/{id}",
 *     summary="Обновляет данные об аккредитации",
 *     tags={"Accreditation"},
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
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
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
 *     path="/api/accreditation/delete/{id}",
 *     summary="Удаляет данные об аккредитации",
 *     tags={"Accreditation"},
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
class AccreditationController extends Controller
{
}
