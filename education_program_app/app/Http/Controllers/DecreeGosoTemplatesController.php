<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecreeGosoTemplatesRequest;
use App\Http\Resources\DecreeGosoTemplatesResource;
use App\Models\DecreeGosoTemplates;
use App\Services\DecreeGosoTemplatesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DecreeGosoTemplatesController extends Controller
{
    /**
     * Получает все данные из таблицы decree_goso_templates
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = DecreeGosoTemplates::all();
        return DecreeGosoTemplatesResource::collection($data);
    }

    /**
     * Создает данные в таблицу decree_goso_templates ссылаясь на сервис DecreeGosoTemplatesService
     * @param DecreeGosoTemplatesRequest $request
     * @return JsonResponse
     */
    public function create(DecreeGosoTemplatesRequest $request)
    {
        $data = $request->validated();
        $service = new DecreeGosoTemplatesService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице decree_goso_templates ссылаясь на сервис DecreeGosoTemplatesService
     * @param DecreeGosoTemplatesRequest $request
     * @param DecreeGosoTemplates $dataId
     * @return JsonResponse
     */
    public function update(DecreeGosoTemplatesRequest $request, DecreeGosoTemplates $dataId)
    {
        $data = $request->validated();
        $service = new DecreeGosoTemplatesService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы decree_goso_templates
     * @param DecreeGosoTemplates $dataId
     * @return JsonResponse
     */
    public function delete(DecreeGosoTemplates $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
