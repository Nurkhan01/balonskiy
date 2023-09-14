<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduateDocumentTypeRequest;
use App\Http\Resources\GraduateDocumentTypeResource;
use App\Models\GraduateDocumentType;
use App\Services\GraduateDocumentTypeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GraduateDocumentTypeController extends Controller
{
    /**
     * Получает все данные из таблицы graduate_document_type
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = GraduateDocumentType::all();
        return GraduateDocumentTypeResource::collection($data);
    }

    /**
     * Создает данные в таблицу graduate_document_type ссылаясь на сервис GraduateDocumentTypeService
     * @param GraduateDocumentTypeRequest $request
     * @return JsonResponse
     */
    public function create(GraduateDocumentTypeRequest $request)
    {
        $data = $request->validated();
        $service = new GraduateDocumentTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице graduate_document_type ссылаясь на сервис GraduateDocumentTypeService
     * @param GraduateDocumentTypeRequest $request
     * @param GraduateDocumentType $dataId
     * @return JsonResponse
     */
    public function update(GraduateDocumentTypeRequest $request, GraduateDocumentType $dataId)
    {
        $data = $request->validated();
        $service = new GraduateDocumentTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы graduate_document_type
     * @param GraduateDocumentType $dataId
     * @return JsonResponse
     */
    public function delete(GraduateDocumentType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
