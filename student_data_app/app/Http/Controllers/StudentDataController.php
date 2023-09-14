<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentDataRequest;
use App\Models\StudentData;
use App\Services\StudentDataService;

class StudentDataController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentData::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentDataRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentDataRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDataService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param StudentDataRequest $request
     * @param StudentData $studentData
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentDataRequest $request, StudentData $studentData)
    {
        $data = $request->validated();
        $service = new StudentDataService();
        $yourModel = $service->update($studentData, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentData $studentData
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentData $studentData)
    {
        $studentData->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
