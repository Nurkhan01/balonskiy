<?php

namespace App\Http\Controllers;

use App\Http\Requests\GosoCycleNameRequest;
use App\Http\Resources\GosoCycleNameResource;
use App\Models\GosoCycleName;
use App\Services\GosoCycleNameService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GosoCycleNameController extends Controller
{
    /**
     * Получает все данные из таблицы goso_cycle_name
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = GosoCycleName::all();
        return GosoCycleNameResource::collection($data);
    }

    /**
     * Создает данные в таблицу goso_cycle_name ссылаясь на сервис GosoCycleNameService
     * @param GosoCycleNameRequest $request
     * @return JsonResponse
     */
    public function create(GosoCycleNameRequest $request)
    {
        $data = $request->validated();
        $service = new GosoCycleNameService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице goso_cycle_name ссылаясь на сервис GosoCycleNameService
     * @param GosoCycleNameRequest $request
     * @param GosoCycleName $dataId
     * @return JsonResponse
     */
    public function update(GosoCycleNameRequest $request, GosoCycleName $dataId)
    {
        $data = $request->validated();
        $service = new GosoCycleNameService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы goso_cycle_name
     * @param GosoCycleName $dataId
     * @return JsonResponse
     */
    public function delete(GosoCycleName $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
