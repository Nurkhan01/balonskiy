<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\EnrollStatusRequest;
use App\Models\Student\EnrollStatus;
use App\Services\Student\EnrollStatusService;

class EnrollStatusController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => EnrollStatus::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param EnrollStatusRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(EnrollStatusRequest $request)
    {
        $data = $request->validated();
        $service = new EnrollStatusService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param EnrollStatusRequest $request
     * @param EnrollStatus $enrollStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EnrollStatusRequest $request, EnrollStatus $enrollStatus)
    {
        $data = $request->validated();
        $service = new EnrollStatusService();
        $yourModel = $service->update($enrollStatus, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param EnrollStatus $enrollStatus
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(EnrollStatus $enrollStatus)
    {
        $enrollStatus->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
