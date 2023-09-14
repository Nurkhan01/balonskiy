<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Laboratory\LaboratoryRequest;
use App\Http\Resources\Laboratory\LaboratoryResource;
use App\Models\Laboratory;
use App\Services\Laboratory\LaboratoryCreateService;
use App\Services\Laboratory\LaboratoryUpdateService;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Laboratory::all();
        return LaboratoryResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param LaboratoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(LaboratoryRequest $request)
    {
        $data = $request->validated();

        $service = new LaboratoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param LaboratoryRequest $request
     * @param Laboratory $laboratory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(LaboratoryRequest $request, Laboratory $laboratory)
    {
        $data = $request->validated();

        $service = new LaboratoryUpdateService();
        $yourModel = $service->update($laboratory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Laboratory $laboratory
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Laboratory $laboratory)
    {
        $laboratory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
