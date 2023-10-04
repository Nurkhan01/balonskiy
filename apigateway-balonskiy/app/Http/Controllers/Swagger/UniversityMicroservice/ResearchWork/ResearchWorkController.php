<?php

namespace App\Http\Controllers\Swagger\UniversityMicroservice\ResearchWork;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/research-work/create",
 *     summary="Добавляет данные о пойсковых работах",
 *     tags={"ResearchWork"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="research_work_type_id", example="5", type="integer"),
 *                 @OA\Property(property="revenue", example="5", type="integer"),
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
 *     path="/api/research-work",
 *     summary="Получает данные о пойсковых работах",
 *     tags={"ResearchWork"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="university_id", example="5", type="integer"),
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="research_work_type_id", example="5", type="integer"),
 *                 @OA\Property(property="revenue", example="5", type="integer"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/research-work/update/{id}",
 *     summary="Обновляет данные о пойсковых работах",
 *     tags={"ResearchWork"},
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
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *                 @OA\Property(property="research_work_type_id", example="5", type="integer"),
 *                 @OA\Property(property="revenue", example="5", type="integer"),
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
 *     path="/api/research-work/delete/{id}",
 *     summary="Удаляет данные о пойсковых работах",
 *     tags={"ResearchWork"},
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
class ResearchWorkController extends Controller
{
}
