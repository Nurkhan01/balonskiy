<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationDirectionRequest;
use App\Http\Resources\EducationDirectionResource;
use App\Models\EducationDirection;
use App\Services\EducationDirectionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationDirectionController extends Controller
{
    /**
     * Получает все данные из таблицы education_direction
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationDirection::all();
        return EducationDirectionResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_direction ссылаясь на сервис EducationDirectionService
     * @param EducationDirectionRequest $request
     * @return JsonResponse
     */
    public function create(EducationDirectionRequest $request)
    {
        $data = $request->validated();
        $service = new EducationDirectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_direction ссылаясь на сервис EducationDirectionService
     * @param EducationDirectionRequest $request
     * @param EducationDirection $educationDirection
     * @return JsonResponse
     */
    public function update(EducationDirectionRequest $request, EducationDirection $educationDirection)
    {
        $data = $request->validated();
        $service = new EducationDirectionService();
        $yourModel = $service->update($educationDirection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_direction
     * @param EducationDirection $educationDirection
     * @return JsonResponse
     */
    public function delete(EducationDirection $educationDirection)
    {
        $educationDirection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
