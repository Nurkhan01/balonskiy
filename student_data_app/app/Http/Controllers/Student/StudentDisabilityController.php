<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentDisabilityRequest;
use App\Models\Student\StudentDisability;
use App\Services\Student\StudentDisabilityService;

class StudentDisabilityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentDisability::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentDisabilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentDisabilityRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDisabilityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param StudentDisabilityRequest $request
     * @param StudentDisability $studentDisability
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentDisabilityRequest $request, StudentDisability $studentDisability)
    {
        $data = $request->validated();
        $service = new StudentDisabilityService();
        $yourModel = $service->update($studentDisability, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentDisability $studentDisability
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentDisability $studentDisability)
    {
        $studentDisability->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
