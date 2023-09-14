<?php

namespace App\Http\Controllers\SportsFacility;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportsFacility\SportsFacilityRequest;
use App\Http\Resources\SportsFacility\SportsFacilityResource;
use App\Models\SportsFacility;
use App\Services\SportsFacility\SportsFacilityCreateService;
use App\Services\SportsFacility\SportsFacilityUpdateService;
use Illuminate\Http\Request;

class SportsFacilityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = SportsFacility::all();
        return SportsFacilityResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param SportsFacilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(SportsFacilityRequest $request)
    {
        $data = $request->validated();
        $service = new SportsFacilityCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param SportsFacilityRequest $request
     * @param SportsFacility $sportsFacility
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SportsFacilityRequest $request, SportsFacility $sportsFacility)
    {
        $data = $request->validated();

        $service = new SportsFacilityUpdateService();
        $yourModel = $service->update($sportsFacility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param SportsFacility $sportsFacility
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(SportsFacility $sportsFacility)
    {
        $sportsFacility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
