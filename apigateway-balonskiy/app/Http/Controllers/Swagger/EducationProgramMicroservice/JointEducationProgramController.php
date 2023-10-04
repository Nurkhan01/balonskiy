<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;
/**
 * @OA\Post(
 *     path="/api/joint-education-program/create",
 *     summary="Добавляет данные об объединенных образовательных программах",
 *     tags={"JointEducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="main_university_id", example="5", type="integer"),
 *                 @OA\Property(property="partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="foreign_partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="contract_start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="contract_end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="joint_ep_financing_source_id", example="5", type="integer"),
 *                 @OA\Property(property="graduate_document_type_id", example="5", type="integer"),
 *                 @OA\Property(property="interaction_problems", example="Some text", type="string"),
 *                 @OA\Property(property="problem_solving_suggestions", example="Some Text", type="string"),
 *                 @OA\Property(property="is_double_diploma", example="0", type="integer"),
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
 *     path="/api/joint-education-program",
 *     summary="Получает данные об объединенных образовательных программах",
 *     tags={"JointEducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="main_university_id", example="5", type="integer"),
 *                 @OA\Property(property="partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="foreign_partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="contract_start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="contract_end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="joint_ep_financing_source_id", example="5", type="integer"),
 *                 @OA\Property(property="graduate_document_type_id", example="5", type="integer"),
 *                 @OA\Property(property="interaction_problems", example="Some text", type="string"),
 *                 @OA\Property(property="problem_solving_suggestions", example="Some Text", type="string"),
 *                 @OA\Property(property="is_double_diploma", example="0", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/joint-education-program/update/{id}",
 *     summary="Обновляет объединенные образовательные программы",
 *     tags={"JointEducationProgram"},
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
 *                 @OA\Property(property="main_university_id", example="5", type="integer"),
 *                 @OA\Property(property="partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="foreign_partner_university_id", example="5", type="integer"),
 *                 @OA\Property(property="contract_start_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="contract_end_date", example="03.10.2023", type="date"),
 *                 @OA\Property(property="joint_ep_financing_source_id", example="5", type="integer"),
 *                 @OA\Property(property="graduate_document_type_id", example="5", type="integer"),
 *                 @OA\Property(property="interaction_problems", example="Some text", type="string"),
 *                 @OA\Property(property="problem_solving_suggestions", example="Some Text", type="string"),
 *                 @OA\Property(property="is_double_diploma", example="0", type="integer"),
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
 *     path="/api/joint-education-program/delete/{id}",
 *     summary="Удаляет объединенные образовательные программы",
 *     tags={"JointEducationProgram"},
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
class JointEducationProgramController extends Controller
{
}
