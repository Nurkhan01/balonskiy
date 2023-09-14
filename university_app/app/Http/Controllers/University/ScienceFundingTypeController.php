<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use App\Http\Requests\University\ScienceFundingTypeRequest;
use App\Http\Resources\University\ScienceFundingTypeResource;
use App\Models\ScienceFundingType;
use App\Services\University\ScienceFundingTypeCreateService;
use App\Services\University\ScienceFundingTypeUpdateService;
use Illuminate\Http\Request;

class ScienceFundingTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = ScienceFundingType::all();
        return ScienceFundingTypeResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param ScienceFundingTypeRequest $request
     * @param ScienceFundingTypeCreateService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ScienceFundingTypeRequest $request, ScienceFundingTypeCreateService $service)
    {
        $data = $request->validated();

        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param ScienceFundingTypeRequest $request
     * @param ScienceFundingTypeUpdateService $service
     * @param ScienceFundingType $scienceFundingType
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(ScienceFundingTypeRequest $request, ScienceFundingTypeUpdateService $service, ScienceFundingType $scienceFundingType)
    {
        $data = $request->validated();
        $yourModel = $service->update($scienceFundingType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param ScienceFundingType $scienceFundingType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(ScienceFundingType $scienceFundingType)
    {
        $scienceFundingType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
