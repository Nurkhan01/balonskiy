<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Laboratory\UniversityLaboratoryRequest;
use App\Http\Resources\Laboratory\UniversityLaboratoryResource;
use App\Models\UniversityLaboratory;
use App\Services\Laboratory\UniversityLaboratoryCreateService;
use App\Services\Laboratory\UniversityLaboratoryUpdateService;
use Illuminate\Http\Request;

class UniversityLaboratoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = UniversityLaboratory::all();
        return UniversityLaboratoryResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param UniversityLaboratoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(UniversityLaboratoryRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityLaboratoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param UniversityLaboratoryRequest $request
     * @param UniversityLaboratory $universityLaboratory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UniversityLaboratoryRequest $request, UniversityLaboratory $universityLaboratory)
    {
        $data = $request->validated();
        $service = new UniversityLaboratoryUpdateService();
        $yourModel = $service->update($universityLaboratory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param UniversityLaboratory $universityLaboratory
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(UniversityLaboratory $universityLaboratory)
    {
        $universityLaboratory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
