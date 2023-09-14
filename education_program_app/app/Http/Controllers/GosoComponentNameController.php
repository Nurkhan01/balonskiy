<?php

namespace App\Http\Controllers;

use App\Http\Requests\GosoComponentNameRequest;
use App\Http\Resources\GosoComponentNameResource;
use App\Models\GosoComponentName;
use App\Services\GosoComponentNameService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GosoComponentNameController extends Controller
{
    /**
     * Получает все данные из таблицы goso_component_name
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = GosoComponentName::all();
        return GosoComponentNameResource::collection($data);
    }

    /**
     * Создает данные в таблицу goso_component_name ссылаясь на сервис GosoComponentNameService
     * @param GosoComponentNameRequest $request
     * @return JsonResponse
     */
    public function create(GosoComponentNameRequest $request)
    {
        $data = $request->validated();
        $service = new GosoComponentNameService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице goso_component_name ссылаясь на сервис GosoComponentNameService
     * @param GosoComponentNameRequest $request
     * @param GosoComponentName $dataId
     * @return JsonResponse
     */
    public function update(GosoComponentNameRequest $request, GosoComponentName $dataId)
    {
        $data = $request->validated();
        $service = new GosoComponentNameService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы goso_component_name
     * @param GosoComponentName $dataId
     * @return JsonResponse
     */
    public function delete(GosoComponentName $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
