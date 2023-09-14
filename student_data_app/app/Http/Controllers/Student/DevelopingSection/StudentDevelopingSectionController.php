<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\StudentDevelopingSectionRequest;
use App\Models\Student\DevelopingSection\StudentDevelopingSection;
use App\Services\Student\DevelopingSection\StudentDevelopingSectionService;

class StudentDevelopingSectionController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentDevelopingSection::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentDevelopingSectionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentDevelopingSectionRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDevelopingSectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param StudentDevelopingSectionRequest $request
     * @param StudentDevelopingSection $studentDevelopingSection
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentDevelopingSectionRequest $request, StudentDevelopingSection $studentDevelopingSection)
    {
        $data = $request->validated();
        $service = new StudentDevelopingSectionService();
        $yourModel = $service->update($studentDevelopingSection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentDevelopingSection $studentDevelopingSection
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentDevelopingSection $studentDevelopingSection)
    {
        $studentDevelopingSection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
