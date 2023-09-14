<?php

namespace App\Http\Controllers\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dermitory\DormitoryTypeRequest;
use App\Http\Resources\Dermitory\DormitoryTypeResource;
use App\Models\DormitoryType;
use App\Services\Dormitory\DormitoryTypeCreateService;
use App\Services\Dormitory\DormitoryTypeUpdateService;

class DormitoryTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = DormitoryType::all();
        return DormitoryTypeResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DormitoryTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DormitoryTypeRequest $request)
    {
        $data = $request->validated();

        $service = new DormitoryTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DormitoryTypeRequest $request
     * @param DormitoryType $dormitoryType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DormitoryTypeRequest $request, DormitoryType $dormitoryType)
    {
        $data = $request->validated();
        $service = new DormitoryTypeUpdateService();
        $yourModel = $service->update($dormitoryType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param DormitoryType $dormitoryType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(DormitoryType $dormitoryType)
    {
        $dormitoryType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
