<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\EmploymentStatusRequest;
use App\Models\Student\EmploymentStatus;
use App\Services\Student\EmploymentStatusService;

class EmploymentStatusController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => EmploymentStatus::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param EmploymentStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(EmploymentStatusRequest $request)
    {
        $data = $request->validated();
        $service = new EmploymentStatusService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param EmploymentStatusRequest $request
     * @param EmploymentStatus $employmentStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EmploymentStatusRequest $request, EmploymentStatus $employmentStatus)
    {
        $data = $request->validated();
        $service = new EmploymentStatusService();
        $yourModel = $service->update($employmentStatus, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param EmploymentStatus $employmentStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(EmploymentStatus $employmentStatus)
    {
        $employmentStatus->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
