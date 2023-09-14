<?php

namespace App\Http\Controllers\ResearchWork;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchWork\ResearchWorkRequest;
use App\Http\Resources\ResearchWork\ResearchWorkResource;
use App\Models\ResearchWork;
use App\Services\ResearchWork\ResearchWorkCreateService;
use App\Services\ResearchWork\ResearchWorkUpdateService;
use Illuminate\Http\Request;

class ResearchWorkController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = ResearchWork::all();
        return ResearchWorkResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param ResearchWorkRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ResearchWorkRequest $request)
    {
        $data = $request->validated();
        $service = new ResearchWorkCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param ResearchWorkRequest $request
     * @param ResearchWork $researchWork
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ResearchWorkRequest $request, ResearchWork $researchWork)
    {
        $data = $request->validated();
        $service = new ResearchWorkUpdateService();
        $yourModel = $service->update($researchWork, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param ResearchWork $researchWork
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(ResearchWork $researchWork)
    {
        $researchWork->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
