<?php

namespace App\Http\Controllers\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dermitory\UniversityDormitoryRequest;
use App\Http\Resources\Dermitory\UniversityDormitoryResource;
use App\Models\UniversityDormitory;
use App\Services\Dormitory\UniversityDormitoryCreateService;
use App\Services\Dormitory\UniversityDormitoryUpdateService;

class UniversityDormitoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = UniversityDormitory::all();
        return UniversityDormitoryResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversityDormitoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversityDormitoryRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityDormitoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversityDormitoryRequest $request
     * @param UniversityDormitory $universityDormitory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversityDormitoryRequest $request, UniversityDormitory $universityDormitory)
    {
        $data = $request->validated();
        $service = new UniversityDormitoryUpdateService();
        $yourModel = $service->update($universityDormitory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param UniversityDormitory $universityDormitory
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(UniversityDormitory $universityDormitory)
    {
        $universityDormitory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
