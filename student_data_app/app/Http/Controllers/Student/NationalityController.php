<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\NationalityRequest;
use App\Models\Student\Nationality;
use App\Services\Student\NationalityService;

class NationalityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Nationality::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param NationalityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(NationalityRequest $request)
    {
        $data = $request->validated();
        $service = new NationalityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param NationalityRequest $request
     * @param Nationality $nationality
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NationalityRequest $request, Nationality $nationality)
    {
        $data = $request->validated();
        $service = new NationalityService();
        $yourModel = $service->update($nationality, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Nationality $nationality
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Nationality $nationality)
    {
        $nationality->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
