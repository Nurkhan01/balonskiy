<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use App\Http\Requests\University\UniversityRequest;
use App\Http\Resources\University\UniversityResource;
use App\Models\University;
use App\Services\University\UniversityCreateService;
use App\Services\University\UniversityUpdateService;

class UniversityController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = University::all();
        return UniversityResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversityRequest $request
     * @param UniversityCreateService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversityRequest $request, UniversityCreateService $service)
    {
        $data = $request->validated();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data'], 500);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversityRequest $request
     * @param UniversityUpdateService $service
     * @param University $university
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversityRequest $request, UniversityUpdateService $service, University $university)
    {
        $data = $request->validated();
        $yourModel = $service->update($university, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param University $university
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(University $university)
    {
        $university->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
