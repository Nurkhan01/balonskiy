<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/formation-education-program/create",
 *     summary="Добавляет данные о формированиях ОП",
 *     tags={"FormationEducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="education_module_id", example="5", type="integer"),
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_cycle_name_id", example="5", type="integer"),
 *                 @OA\Property(property="education_discipline_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_component_name_id", example="5", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="is_cv", example="1", type="integer"),
 *                 @OA\Property(property="f_group_id", example="5", type="integer"),
 *                 @OA\Property(property="is_confirmed", example="1", type="integer"),
 *                 @OA\Property(property="component_status", example="5", type="integer"),
 *                 @OA\Property(property="is_minor", example="1", type="integer"),
 *                 @OA\Property(property="minor_f_group_id", example="5", type="integer"),
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
 *     path="/api/formation-education-program",
 *     summary="Получает данные о формированиях ОП",
 *     tags={"FormationEducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="education_module_id", example="5", type="integer"),
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_cycle_name_id", example="5", type="integer"),
 *                 @OA\Property(property="education_discipline_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_component_name_id", example="5", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="is_cv", example="1", type="integer"),
 *                 @OA\Property(property="f_group_id", example="5", type="integer"),
 *                 @OA\Property(property="is_confirmed", example="1", type="integer"),
 *                 @OA\Property(property="component_status", example="5", type="integer"),
 *                 @OA\Property(property="is_minor", example="1", type="integer"),
 *                 @OA\Property(property="minor_f_group_id", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/formation-education-program/update/{id}",
 *     summary="Обновляет данные о формированиях ОП",
 *     tags={"FormationEducationProgram"},
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
 *                 @OA\Property(property="education_module_id", example="5", type="integer"),
 *                 @OA\Property(property="education_program_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_cycle_name_id", example="5", type="integer"),
 *                 @OA\Property(property="education_discipline_id", example="5", type="integer"),
 *                 @OA\Property(property="goso_component_name_id", example="5", type="integer"),
 *                 @OA\Property(property="credit", example="5", type="integer"),
 *                 @OA\Property(property="is_cv", example="1", type="integer"),
 *                 @OA\Property(property="f_group_id", example="5", type="integer"),
 *                 @OA\Property(property="is_confirmed", example="1", type="integer"),
 *                 @OA\Property(property="component_status", example="5", type="integer"),
 *                 @OA\Property(property="is_minor", example="1", type="integer"),
 *                 @OA\Property(property="minor_f_group_id", example="5", type="integer"),
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
 *     path="/api/formation-education-program/delete/{id}",
 *     summary="Удаляет данные о формированиях ОП",
 *     tags={"FormationEducationProgram"},
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
class FormationEducationProgramController extends Controller
{
}
