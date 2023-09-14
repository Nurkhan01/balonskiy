<?php

namespace App\Http\Controllers;

use App\Http\Requests\MobilityRequest;
use App\Models\Mobility;
use App\Services\MobilityService;
use Illuminate\Http\Request;

class MobilityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Mobility::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param MobilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(MobilityRequest $request)
    {
        $data = $request->validated();

        $service = new MobilityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param MobilityRequest $request
     * @param Mobility $mobility
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MobilityRequest $request, Mobility $mobility)
    {
        $data = $request->validated();
        $service = new MobilityService();
        $yourModel = $service->update($mobility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Mobility $mobility
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Mobility $mobility)
    {
        $mobility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
