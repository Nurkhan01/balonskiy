<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DisabilityCategoryRequest;
use App\Models\Student\DisabilityCategory;
use App\Services\Student\DisabilityCategoryService;

class DisabilityCategoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => DisabilityCategory::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DisabilityCategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DisabilityCategoryRequest $request)
    {
        $data = $request->validated();
        $service = new DisabilityCategoryService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DisabilityCategoryRequest $request
     * @param DisabilityCategory $disabilityCategory
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(DisabilityCategoryRequest $request, DisabilityCategory $disabilityCategory)
    {
        $data = $request->validated();
        $service = new DisabilityCategoryService();
        $yourModel = $service->update($disabilityCategory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param DisabilityCategory $disabilityCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(DisabilityCategory $disabilityCategory)
    {
        $disabilityCategory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
