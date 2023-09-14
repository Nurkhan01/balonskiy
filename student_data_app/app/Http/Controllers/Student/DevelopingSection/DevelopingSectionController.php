<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\DevelopingSectionRequest;
use App\Models\Student\DevelopingSection\DevelopingSection;
use App\Services\Student\DevelopingSection\DevelopingSectionService;

class DevelopingSectionController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => DevelopingSection::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DevelopingSectionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DevelopingSectionRequest $request)
    {
        $data = $request->validated();
        $service = new DevelopingSectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DevelopingSectionRequest $request
     * @param DevelopingSection $developingSection
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DevelopingSectionRequest $request, DevelopingSection $developingSection)
    {
        $data = $request->validated();
        $service = new DevelopingSectionService();
        $yourModel = $service->update($developingSection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param DevelopingSection $developingSection
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(DevelopingSection $developingSection)
    {
        $developingSection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
