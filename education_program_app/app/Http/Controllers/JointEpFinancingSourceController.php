<?php

namespace App\Http\Controllers;

use App\Http\Requests\JointEpFinancingSourceRequest;
use App\Http\Resources\JointEpFinancingSourceResource;
use App\Models\JointEpFinancingSource;
use App\Services\JointEpFinancingSourceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class JointEpFinancingSourceController extends Controller
{
    /**
     * Получает все данные из таблицы joint_ep_financing_source
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = JointEpFinancingSource::all();
        return JointEpFinancingSourceResource::collection($data);
    }

    /**
     * Создает данные в таблицу joint_ep_financing_source ссылаясь на сервис JointEpFinancingSourceService
     * @param JointEpFinancingSourceRequest $request
     * @return JsonResponse
     */
    public function create(JointEpFinancingSourceRequest $request)
    {
        $data = $request->validated();
        $service = new JointEpFinancingSourceService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице joint_ep_financing_source ссылаясь на сервис JointEpFinancingSourceService
     * @param JointEpFinancingSourceRequest $request
     * @param JointEpFinancingSource $dataId
     * @return JsonResponse
     */
    public function update(JointEpFinancingSourceRequest $request, JointEpFinancingSource $dataId)
    {
        $data = $request->validated();
        $service = new JointEpFinancingSourceService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы joint_ep_financing_source
     * @param JointEpFinancingSource $dataId
     * @return JsonResponse
     */
    public function delete(JointEpFinancingSource $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
