<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditTimeTypeRequest;
use App\Http\Resources\CreditTimeTypeResource;
use App\Models\CreditTimeType;
use App\Services\CreditTimeTypeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreditTimeTypeController extends Controller
{
    /**
     * Получает все данные из таблицы credit_time_type
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = CreditTimeType::all();
        return CreditTimeTypeResource::collection($data);
    }

    /**
     * Создает данные в таблицу credit_time_type ссылаясь на сервис CreditTimeTypeService
     * @param CreditTimeTypeRequest $request
     * @return JsonResponse
     */
    public function create(CreditTimeTypeRequest $request)
    {
        $data = $request->validated();

        $service = new CreditTimeTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    /**
     * Изменяет данные в таблице credit_time_type ссылаясь на сервис CreditTimeTypeService
     * @param CreditTimeTypeRequest $request
     * @param CreditTimeType $dataId
     * @return JsonResponse
     */
    public function update(CreditTimeTypeRequest $request, CreditTimeType $dataId)
    {
        $data = $request->validated();

        $service = new CreditTimeTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет данные из таблицы credit_time_type
     * @param CreditTimeType $dataId
     * @return JsonResponse
     */
    public function delete(CreditTimeType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
