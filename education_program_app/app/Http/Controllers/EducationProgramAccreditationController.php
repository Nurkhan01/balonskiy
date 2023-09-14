<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationProgramAccreditationRequest;
use App\Http\Resources\EducationProgramAccreditationResource;
use App\Models\EducationProgramAccreditation;
use App\Services\EducationProgramAccreditationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationProgramAccreditationController extends Controller
{
    /**
     * Получает все данные из таблицы education_program_accreditation
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationProgramAccreditation::all();
        return EducationProgramAccreditationResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_program_accreditation ссылаясь на сервис EducationProgramAccreditationService
     * @param EducationProgramAccreditationRequest $request
     * @return JsonResponse
     */
    public function create(EducationProgramAccreditationRequest $request)
    {
        $data = $request->validated();
        $service = new EducationProgramAccreditationService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_program_accreditation ссылаясь на сервис EducationProgramAccreditationService
     * @param EducationProgramAccreditationRequest $request
     * @param EducationProgramAccreditation $dataId
     * @return JsonResponse
     */
    public function update(EducationProgramAccreditationRequest $request, EducationProgramAccreditation $dataId)
    {
        $data = $request->validated();
        $service = new EducationProgramAccreditationService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_program_accreditation
     * @param EducationProgramAccreditation $dataId
     * @return JsonResponse
     */
    public function delete(EducationProgramAccreditation $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
