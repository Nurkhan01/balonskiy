<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingRequest;
use App\Models\Teacher\Training\Training;
use App\Services\Teacher\Training\TrainingService;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Training::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param TrainingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TrainingRequest $request)
    {
        $data = $request->validated();

        $service = new TrainingService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param TrainingRequest $request
     * @param Training $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TrainingRequest $request, Training $dataId)
    {
        $data = $request->validated();

        $service = new TrainingService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Training $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Training $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
