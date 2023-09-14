<?php

namespace App\Http\Controllers\Student\Employment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\Employment\StudentEmploymentRequest;
use App\Models\Student\Employment\StudentEmployment;
use App\Services\Student\Employment\StudentEmploymentService;

class StudentEmploymentController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentEmployment::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentEmploymentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentEmploymentRequest $request)
    {
        $data = $request->validated();

        $service = new StudentEmploymentService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param StudentEmploymentRequest $request
     * @param StudentEmployment $studentEmployment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentEmploymentRequest $request, StudentEmployment $studentEmployment)
    {
        $data = $request->validated();

        $service = new StudentEmploymentService();
        $yourModel = $service->update($studentEmployment, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentEmployment $studentEmployment
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentEmployment $studentEmployment)
    {
        $studentEmployment->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
