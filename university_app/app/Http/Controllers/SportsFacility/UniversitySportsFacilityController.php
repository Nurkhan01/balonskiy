<?php

namespace App\Http\Controllers\SportsFacility;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportsFacility\UniversitySportsFacilityRequest;
use App\Http\Resources\SportsFacility\UniversitySportsFacilityResource;
use App\Models\UniversitySportsFacility;
use App\Services\SportsFacility\UniversitySportsFacilityCreateService;
use App\Services\SportsFacility\UniversitySportsFacilityUpdateService;
use Illuminate\Http\Request;

class UniversitySportsFacilityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = UniversitySportsFacility::all();
        return UniversitySportsFacilityResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversitySportsFacilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversitySportsFacilityRequest $request)
    {
        $data = $request->validated();

        $service = new UniversitySportsFacilityCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversitySportsFacilityRequest $request
     * @param UniversitySportsFacility $universitySportsFacility
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversitySportsFacilityRequest $request, UniversitySportsFacility $universitySportsFacility)
    {
        $data = $request->validated();

        $service = new UniversitySportsFacilityUpdateService();
        $yourModel = $service->update($universitySportsFacility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param UniversitySportsFacility $universitySportsFacility
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(UniversitySportsFacility $universitySportsFacility)
    {
        $universitySportsFacility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
