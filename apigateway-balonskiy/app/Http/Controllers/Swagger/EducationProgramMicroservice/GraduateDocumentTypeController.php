<?php

namespace App\Http\Controllers\Swagger\EducationProgramMicroservice;
use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/graduate-document-type/create",
 *     summary="Добавляет данные о типах документов для выпускников",
 *     tags={"GraduateDocumentType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="name", example="Some text", type="string"),
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
 *     path="/api/graduate-document-type",
 *     summary="Получает данные о типах документов для выпускников",
 *     tags={"GraduateDocumentType"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="name", example="Some text", type="string"),
 *             )
 *         )
 *     )
 * ),
 * @OA\Put(
 *     path="/api/graduate-document-type/update/{id}",
 *     summary="Обновляет тип документа для выпускников",
 *     tags={"GraduateDocumentType"},
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
 *     path="/api/graduate-document-type/delete/{id}",
 *     summary="Удаляет тип документа для выпускников",
 *     tags={"GraduateDocumentType"},
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
class GraduateDocumentTypeController extends Controller
{
}
