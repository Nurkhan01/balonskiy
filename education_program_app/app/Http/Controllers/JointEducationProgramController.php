<?php

namespace App\Http\Controllers;

use App\Http\Requests\JointEducationProgramRequest;
use App\Http\Resources\JointEducationProgramResource;
use App\Models\JointEducationProgram;
use App\Services\JointEducationProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class JointEducationProgramController extends Controller
{
    /**
     * Получает все данные из таблицы joint_education_program
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = JointEducationProgram::all();
        return JointEducationProgramResource::collection($data);
    }

    /**
     * Создает данные в таблицу joint_education_program ссылаясь на сервис JointEducationProgramService
     * @param JointEducationProgramRequest $request
     * @return JsonResponse
     */
    public function create(JointEducationProgramRequest $request)
    {
        $data = $request->validated();
        $service = new JointEducationProgramService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице joint_education_program ссылаясь на сервис JointEducationProgramService
     * @param JointEducationProgramRequest $request
     * @param JointEducationProgram $dataId
     * @return JsonResponse
     */
    public function update(JointEducationProgramRequest $request, JointEducationProgram $dataId)
    {
        $data = $request->validated();
        $service = new JointEducationProgramService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы joint_education_program
     * @param JointEducationProgram $dataId
     * @return JsonResponse
     */
    public function delete(JointEducationProgram $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
