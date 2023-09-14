<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingFormRequest;
use App\Models\Teacher\Training\TrainingForm;
use App\Services\Teacher\Training\TrainingFormService;
use Illuminate\Http\Request;

class TrainingFormController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TrainingForm::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param TrainingFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TrainingFormRequest $request)
    {
        $data = $request->validated();

        $service = new TrainingFormService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param TrainingFormRequest $request
     * @param TrainingForm $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TrainingFormRequest $request, TrainingForm $dataId)
    {
        $data = $request->validated();

        $service = new TrainingFormService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param TrainingForm $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TrainingForm $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
