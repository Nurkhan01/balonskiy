<?php

namespace App\Http\Controllers\SpecialNeedsCondition;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialNeedsCondition\SpecialNeedsConditionRequest;
use App\Http\Resources\SpecialNeedsCondition\SpecialNeedsConditionResource;
use App\Models\SpecialNeedsCondition;
use App\Services\SpecialNeedsCondition\SpecialNeedsConditionCreateService;
use App\Services\SpecialNeedsCondition\SpecialNeedsConditionUpdateService;

class SpecialNeedsConditionController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = SpecialNeedsCondition::all();
        return SpecialNeedsConditionResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param SpecialNeedsConditionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(SpecialNeedsConditionRequest $request)
    {
        $data = $request->validated();

        $service = new SpecialNeedsConditionCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param SpecialNeedsConditionRequest $request
     * @param SpecialNeedsCondition $specialNeedsCondition
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SpecialNeedsConditionRequest $request, SpecialNeedsCondition $specialNeedsCondition)
    {
        $data = $request->validated();

        $service = new SpecialNeedsConditionUpdateService();
        $yourModel = $service->update($specialNeedsCondition, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param SpecialNeedsCondition $specialNeedsCondition
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(SpecialNeedsCondition $specialNeedsCondition)
    {
        $specialNeedsCondition->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
