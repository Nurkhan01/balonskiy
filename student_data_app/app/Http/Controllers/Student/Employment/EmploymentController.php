<?php

namespace App\Http\Controllers\Student\Employment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\Employment\EmploymentRequest;
use App\Models\Student\Employment\Employment;
use App\Services\Student\Employment\EmploymentService;

class EmploymentController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Employment::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param EmploymentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(EmploymentRequest $request)
    {
        $data = $request->validated();

        $service = new EmploymentService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param EmploymentRequest $request
     * @param Employment $employment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EmploymentRequest $request, Employment $employment)
    {
        $data = $request->validated();

        $service = new EmploymentService();
        $yourModel = $service->update($employment, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Employment $employment
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Employment $employment)
    {
        $employment->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
