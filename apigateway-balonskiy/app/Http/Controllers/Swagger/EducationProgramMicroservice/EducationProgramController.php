<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
/**
 * @OA\Post(
 *     path="/api/education-program/create",
 *     summary="Добавляет образовательную программу",
 *     tags={"EducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Smart Technology", type="string"),
 *                 @OA\Property(property="department_id", example="123", type="integer"),
 *                 @OA\Property(property="language_id", example="123", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="study_level_id", example="123", type="integer"),
 *                 @OA\Property(property="education_field_id", example="123", type="integer"),
 *                 @OA\Property(property="is_inclusive_study", example="1", type="bool"),
 *                 @OA\Property(property="professional_standard_id", example="1", type="integer"),
 *                 @OA\Property(property="registration_date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="type", example="type", type="string"),
 *                 @OA\Property(property="credits", example="5", type="string"),
 *                 @OA\Property(property="education_direction_id", example="5", type="integer"),
 *                 @OA\Property(property="education_group_id", example="12", type="integer"),
 *                 @OA\Property(property="is_non_formal", example="1", type="integer"),
 *                 @OA\Property(property="recognizes_previous_nonformal_education", example="13", type="integer"),
 *                 @OA\Property(property="is_joint", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_50_20_30_program", example="0", type="integer"),
 *                 @OA\Property(property="is_in_reestr", example="0", type="integer"),
 *                 @OA\Property(property="is_enc_program", example="0", type="integer")
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
 *     path="/api/education-program",
 *     summary="Получает данные об образовательных программах",
 *     tags={"EducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Smart Technology", type="string"),
 *                 @OA\Property(property="department_id", example="123", type="integer"),
 *                 @OA\Property(property="language_id", example="123", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="study_level_id", example="123", type="integer"),
 *                 @OA\Property(property="education_field_id", example="123", type="integer"),
 *                 @OA\Property(property="is_inclusive_study", example="1", type="bool"),
 *                 @OA\Property(property="professional_standard_id", example="1", type="integer"),
 *                 @OA\Property(property="registration_date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="type", example="type", type="string"),
 *                 @OA\Property(property="credits", example="5", type="string"),
 *                 @OA\Property(property="education_direction_id", example="5", type="integer"),
 *                 @OA\Property(property="education_group_id", example="12", type="integer"),
 *                 @OA\Property(property="is_non_formal", example="1", type="integer"),
 *                 @OA\Property(property="recognizes_previous_nonformal_education", example="13", type="integer"),
 *                 @OA\Property(property="is_joint", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_50_20_30_program", example="0", type="integer"),
 *                 @OA\Property(property="is_in_reestr", example="0", type="integer"),
 *                 @OA\Property(property="is_enc_program", example="0", type="integer")
 *             )
 *         )
 *     )
 * ),
 * @OA\Get(
 *     path="/api/education-program/get-education-program-info",
 *     summary="Получает данные об образовательной программе по ID",
 *     tags={"EducationProgram"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID образовательной программы",
 *         in="query",
 *         name="id",
 *         required=true,
 *         @OA\Schema(type="integer"),
 *         @OA\Examples(example="int", value="1", summary="An int value."),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="name", example="Smart Technology", type="string"),
 *                 @OA\Property(property="department_id", example="123", type="integer"),
 *                 @OA\Property(property="language_id", example="123", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="study_level_id", example="123", type="integer"),
 *                 @OA\Property(property="education_field_id", example="123", type="integer"),
 *                 @OA\Property(property="is_inclusive_study", example="1", type="bool"),
 *                 @OA\Property(property="professional_standard_id", example="1", type="integer"),
 *                 @OA\Property(property="registration_date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="type", example="type", type="string"),
 *                 @OA\Property(property="credits", example="5", type="string"),
 *                 @OA\Property(property="education_direction_id", example="5", type="integer"),
 *                 @OA\Property(property="education_group_id", example="12", type="integer"),
 *                 @OA\Property(property="is_non_formal", example="1", type="integer"),
 *                 @OA\Property(property="recognizes_previous_nonformal_education", example="13", type="integer"),
 *                 @OA\Property(property="is_joint", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_50_20_30_program", example="0", type="integer"),
 *                 @OA\Property(property="is_in_reestr", example="0", type="integer"),
 *                 @OA\Property(property="is_enc_program", example="0", type="integer")
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/education-program/update/{id}",
 *     summary="Обновляет образовательную программу",
 *     tags={"EducationProgram"},
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
 *                 @OA\Property(property="name", example="Smart Technology", type="string"),
 *                 @OA\Property(property="department_id", example="123", type="integer"),
 *                 @OA\Property(property="language_id", example="123", type="integer"),
 *                 @OA\Property(property="code", example="6B0421", type="string"),
 *                 @OA\Property(property="study_level_id", example="123", type="integer"),
 *                 @OA\Property(property="education_field_id", example="123", type="integer"),
 *                 @OA\Property(property="is_inclusive_study", example="1", type="bool"),
 *                 @OA\Property(property="professional_standard_id", example="1", type="integer"),
 *                 @OA\Property(property="registration_date", example="03.10.2023", type="string"),
 *                 @OA\Property(property="type", example="type", type="string"),
 *                 @OA\Property(property="credits", example="5", type="string"),
 *                 @OA\Property(property="education_direction_id", example="5", type="integer"),
 *                 @OA\Property(property="education_group_id", example="12", type="integer"),
 *                 @OA\Property(property="is_non_formal", example="1", type="integer"),
 *                 @OA\Property(property="recognizes_previous_nonformal_education", example="13", type="integer"),
 *                 @OA\Property(property="is_joint", example="1", type="integer"),
 *                 @OA\Property(property="is_remote", example="0", type="integer"),
 *                 @OA\Property(property="is_50_20_30_program", example="0", type="integer"),
 *                 @OA\Property(property="is_in_reestr", example="0", type="integer"),
 *                 @OA\Property(property="is_enc_program", example="0", type="integer")
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
 *     path="/api/education-program/delete/{id}",
 *     summary="Удаляет образовательную программу",
 *     tags={"EducationProgram"},
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
class EducationProgramController extends Controller
{

}
