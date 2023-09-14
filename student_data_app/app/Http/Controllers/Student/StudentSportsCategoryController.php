<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentSportsCategoryRequest;
use App\Http\Requests\UpdateStudentSportsCategoryRequest;
use App\Models\Student\StudentSportsCategory;
use App\Services\Student\StudentSportsCategoryService;

class StudentSportsCategoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => StudentSportsCategory::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param StudentSportsCategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentSportsCategoryRequest $request)
    {
        $data = $request->validated();
        $service = new StudentSportsCategoryService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param StudentSportsCategoryRequest $request
     * @param StudentSportsCategory $studentSportsCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StudentSportsCategoryRequest $request, StudentSportsCategory $studentSportsCategory)
    {
        $data = $request->validated();
        $service = new StudentSportsCategoryService();
        $yourModel = $service->update($studentSportsCategory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param StudentSportsCategory $studentSportsCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(StudentSportsCategory $studentSportsCategory)
    {
        $studentSportsCategory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
