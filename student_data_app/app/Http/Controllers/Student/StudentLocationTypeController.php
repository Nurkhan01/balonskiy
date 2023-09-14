<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentLocationTypeRequest;
use App\Http\Requests\Student\UpdateStudentLocationTypeRequest;
use App\Models\Student\StudentLocationType;
use App\Services\Student\StudentLocationTypeService;

class StudentLocationTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentLocationType::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentLocationTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentLocationTypeRequest $request)
    {
        $data = $request->validated();
        $service = new StudentLocationTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param StudentLocationTypeRequest $request
     * @param StudentLocationType $studentLocationType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentLocationTypeRequest $request, StudentLocationType $studentLocationType)
    {
        $data = $request->validated();
        $service = new StudentLocationTypeService();
        $yourModel = $service->update($studentLocationType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentLocationType $studentLocationType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentLocationType $studentLocationType)
    {
        $studentLocationType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
