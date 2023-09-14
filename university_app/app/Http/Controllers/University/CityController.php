<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use App\Http\Requests\University\UniversityCityRequest;
use App\Http\Resources\University\CityResource;
use App\Models\City;
use App\Services\University\UniversityCityCreateService;
use App\Services\University\UniversityCityUpdateService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = City::all();
        return CityResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversityCityRequest $request
     * @param UniversityCityCreateService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversityCityRequest $request, UniversityCityCreateService $service)
    {
        $data = $request->validated();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversityCityRequest $request
     * @param UniversityCityUpdateService $service
     * @param City $city
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversityCityRequest $request, UniversityCityUpdateService $service, City $city)
    {
        $data = $request->validated();
        $yourModel = $service->update($city, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param City $city
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(City $city)
    {
        if (!$city) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        $city->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
