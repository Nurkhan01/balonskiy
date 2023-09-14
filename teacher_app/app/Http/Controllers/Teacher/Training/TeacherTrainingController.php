<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TeacherTrainingRequest;
use App\Models\Teacher\Training\TeacherTraining;
use App\Services\Teacher\Training\TeacherTrainingService;
use Illuminate\Http\Request;

class TeacherTrainingController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TeacherTraining::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param TeacherTrainingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TeacherTrainingRequest $request)
    {
        $data = $request->validated();
        $service = new TeacherTrainingService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param TeacherTrainingRequest $request
     * @param TeacherTraining $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TeacherTrainingRequest $request, TeacherTraining $dataId)
    {
        $data = $request->validated();
        $service = new TeacherTrainingService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param TeacherTraining $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TeacherTraining $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
