<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\DevelopmentSectionTypeRequest;
use App\Models\Student\DevelopingSection\DevelopmentSectionType;
use App\Services\Student\DevelopingSection\DevelopmentSectionTypeService;


class DevelopmentSectionTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => DevelopmentSectionType::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DevelopmentSectionTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DevelopmentSectionTypeRequest $request)
    {
        $data = $request->validated();
        $service = new DevelopmentSectionTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DevelopmentSectionTypeRequest $request
     * @param DevelopmentSectionType $developmentSectionType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DevelopmentSectionTypeRequest $request, DevelopmentSectionType $developmentSectionType)
    {
        $data = $request->validated();
        $service = new DevelopmentSectionTypeService();
        $yourModel = $service->update($developmentSectionType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param DevelopmentSectionType $developmentSectionType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(DevelopmentSectionType $developmentSectionType)
    {
        $developmentSectionType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
