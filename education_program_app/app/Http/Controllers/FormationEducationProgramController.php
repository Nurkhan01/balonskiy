<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationEducationProgramRequest;
use App\Http\Resources\FormationEducationProgramResource;
use App\Models\FormationEducationProgram;
use App\Services\FormationEducationProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FormationEducationProgramController extends Controller
{
    /**
     * Получает все данные из таблицы formation_education_program
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = FormationEducationProgram::all();
        return FormationEducationProgramResource::collection($data);
    }

    /**
     * Создает данные в таблицу formation_education_program ссылаясь на сервис FormationEducationProgramService
     * @param FormationEducationProgramRequest $request
     * @return JsonResponse
     */
    public function create(FormationEducationProgramRequest $request)
    {
        $data = $request->validated();
        $service = new FormationEducationProgramService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице formation_education_program ссылаясь на сервис FormationEducationProgramService
     * @param FormationEducationProgramRequest $request
     * @param FormationEducationProgram $dataId
     * @return JsonResponse
     */
    public function update(FormationEducationProgramRequest $request, FormationEducationProgram $dataId)
    {
        $data = $request->validated();
        $service = new FormationEducationProgramService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы formation_education_program
     * @param FormationEducationProgram $dataId
     * @return JsonResponse
     */
    public function delete(FormationEducationProgram $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
