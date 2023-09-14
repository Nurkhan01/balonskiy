<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\BuildingRequest;
use App\Http\Resources\Building\BuildingResource;
use App\Models\Building;
use App\Services\Building\BuildingCreateService;
use App\Services\Building\BuildingUpdateService;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Building::all();
        return BuildingResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param BuildingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(BuildingRequest $request)
    {
        $data = $request->validated();
        $service = new BuildingCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param BuildingRequest $request
     * @param Building $building
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BuildingRequest $request, Building $building)
    {
        $data = $request->validated();
        $service = new BuildingUpdateService();
        $yourModel = $service->update($building, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Building $building
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Building $building)
    {
        $building->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
