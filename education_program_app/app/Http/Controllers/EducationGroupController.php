<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationGroupRequest;
use App\Http\Resources\EducationGroupResource;
use App\Models\EducationGroup;
use App\Services\EducationGroupService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationGroupController extends Controller
{
    /**
     * Получает все данные из таблицы education_group
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationGroup::all();
        return EducationGroupResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_group ссылаясь на сервис EducationGroupService
     * @param EducationGroupRequest $request
     * @return JsonResponse
     */
    public function create(EducationGroupRequest $request)
    {
        $data = $request->validated();
        $service = new EducationGroupService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_group ссылаясь на сервис EducationGroupService
     * @param EducationGroupRequest $request
     * @param EducationGroup $educationGroup
     * @return JsonResponse
     */
    public function update(EducationGroupRequest $request, EducationGroup $educationGroup)
    {
        $data = $request->validated();
        $service = new EducationGroupService();
        $yourModel = $service->update($educationGroup, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_group
     * @param EducationGroup $educationGroup
     * @return JsonResponse
     */
    public function delete(EducationGroup $educationGroup)
    {
        $educationGroup->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
