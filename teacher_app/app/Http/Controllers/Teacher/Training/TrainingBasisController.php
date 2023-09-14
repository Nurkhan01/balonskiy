<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingBasisRequest;
use App\Models\Teacher\Training\TrainingBasis;
use App\Services\Teacher\Training\TrainingBasisService;

class TrainingBasisController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TrainingBasis::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param TrainingBasisRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TrainingBasisRequest $request)
    {
        $data = $request->validated();
        $service = new TrainingBasisService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param TrainingBasisRequest $request
     * @param TrainingBasis $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TrainingBasisRequest $request, TrainingBasis $dataId)
    {
        $data = $request->validated();
        $service = new TrainingBasisService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param TrainingBasis $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TrainingBasis $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
