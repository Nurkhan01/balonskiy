<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationProgramRequest;
use App\Http\Resources\EducationProgramResource;
use App\Models\EducationProgram;
use App\Services\EducationProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationProgramController extends Controller
{
    /**
     * Получает все данные из таблицы education_program
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationProgram::all();
        return EducationProgramResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_program ссылаясь на сервис EducationProgramService
     * @param EducationProgramRequest $request
     * @return JsonResponse
     */
    public function create(EducationProgramRequest $request)
    {
        $data = $request->validated();
        $service = new EducationProgramService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_program ссылаясь на сервис EducationProgramService
     * @param EducationProgramRequest $request
     * @param EducationProgram $educationProgram
     * @return JsonResponse
     */
    public function update(EducationProgramRequest $request, EducationProgram $educationProgram)
    {
        $data = $request->validated();
        $service = new EducationProgramService();
        $yourModel = $service->update($educationProgram, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_program
     * @param EducationProgram $educationProgram
     * @return JsonResponse
     */
    public function delete(EducationProgram $educationProgram)
    {
        $educationProgram->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
