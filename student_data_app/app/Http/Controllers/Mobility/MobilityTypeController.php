<?php

namespace App\Http\Controllers\Mobility;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\MobilityTypeRequest;
use App\Models\Mobility\MobilityType;
use App\Services\Mobility\MobilityTypeService;

class MobilityTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => MobilityType::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param MobilityTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(MobilityTypeRequest $request)
    {
        $data = $request->validated();
        $service = new MobilityTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param MobilityTypeRequest $request
     * @param MobilityType $mobilityType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MobilityTypeRequest $request, MobilityType $mobilityType)
    {
        $data = $request->validated();
        $service = new MobilityTypeService();
        $yourModel = $service->update($mobilityType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param MobilityType $mobilityType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(MobilityType $mobilityType)
    {
        $mobilityType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
