<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/education-program-accreditation/create",
 *     summary="Добавляет данные об аккредитациях ОП",
 *     tags={"EducationProgramAccreditation"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
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
 *     path="/api/education-program-accreditation",
 *     summary="Получает данные об аккредитациях ОП",
 *     tags={"EducationProgramAccreditation"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/education-program-accreditation/update/{id}",
 *     summary="Обновляет аккредитацию ОП",
 *     tags={"EducationProgramAccreditation"},
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
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="report_links", example="Some text", type="string"),
 *                 @OA\Property(property="start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="accreditation_type_id", example="5", type="integer"),
 *                 @OA\Property(property="accreditation_body_id", example="5", type="integer"),
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
 *     path="/api/education-program-accreditation/delete/{id}",
 *     summary="Удаляет аккредитацию ОП",
 *     tags={"EducationProgramAccreditation"},
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
class EducationProgramAccreditationController extends Controller
{
}
