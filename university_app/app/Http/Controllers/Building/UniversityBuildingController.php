<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\UniversityBuildingRequest;
use App\Http\Resources\Building\UniversityBuildingResource;
use App\Models\UniversityBuilding;
use App\Services\Building\UniversityBuildingCreateService;
use App\Services\Building\UniversityBuildingUpdateService;
use Illuminate\Http\Request;

class UniversityBuildingController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = UniversityBuilding::all();
        return UniversityBuildingResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversityBuildingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversityBuildingRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityBuildingCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversityBuildingRequest $request
     * @param UniversityBuilding $universityBuilding
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversityBuildingRequest $request, UniversityBuilding $universityBuilding)
    {
        $data = $request->validated();

        $service = new UniversityBuildingUpdateService();
        $yourModel = $service->update($universityBuilding, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param UniversityBuilding $universityBuilding
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function delete(UniversityBuilding $universityBuilding)
    {
        $universityBuilding->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
