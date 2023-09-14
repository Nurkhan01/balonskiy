<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyLevelRequest;
use App\Http\Resources\StudyLevelResource;
use App\Models\StudyLevel;
use App\Services\StudyLevelService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StudyLevelController extends Controller
{
    /**
     * Получает все данные из таблицы study_level
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = StudyLevel::all();
        return StudyLevelResource::collection($data);
    }

    /**
     * Создает данные в таблицу study_level ссылаясь на сервис StudyLevelService
     * @param StudyLevelRequest $request
     * @return JsonResponse
     */
    public function create(StudyLevelRequest $request)
    {
        $data = $request->validated();
        $service = new StudyLevelService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице study_level ссылаясь на сервис StudyLevelService
     * @param StudyLevelRequest $request
     * @param StudyLevel $studyLevel
     * @return JsonResponse
     */
    public function update(StudyLevelRequest $request, StudyLevel $studyLevel)
    {
        $data = $request->validated();
        $service = new StudyLevelService();
        $yourModel = $service->update($studyLevel, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы study_level
     * @param StudyLevel $studyLevel
     * @return JsonResponse
     */
    public function delete(StudyLevel $studyLevel)
    {
        $studyLevel->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
