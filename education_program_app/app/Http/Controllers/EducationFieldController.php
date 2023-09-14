<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationFieldRequest;
use App\Http\Resources\EducationFieldResource;
use App\Models\EducationField;
use App\Services\EducationFieldService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationFieldController extends Controller
{
    /**
     * Получает все данные из таблицы education_field
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationField::all();
        return EducationFieldResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_field ссылаясь на сервис EducationFieldService
     * @param EducationFieldRequest $request
     * @return JsonResponse
     */
    public function create(EducationFieldRequest $request)
    {
        $data = $request->validated();
        $service = new EducationFieldService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_field ссылаясь на сервис EducationFieldService
     * @param EducationFieldRequest $request
     * @param EducationField $educationField
     * @return JsonResponse
     */
    public function update(EducationFieldRequest $request, EducationField $educationField)
    {
        $data = $request->validated();
        $service = new EducationFieldService();
        $yourModel = $service->update($educationField, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_field
     * @param EducationField $educationField
     * @return JsonResponse
     */
    public function delete(EducationField $educationField)
    {
        $educationField->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
