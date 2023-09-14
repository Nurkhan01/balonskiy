<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherUniversityRequest;
use App\Models\Teacher\TeacherUniversity;
use App\Services\Teacher\TeacherUniversityService;
use Illuminate\Http\Request;

class TeacherUniversityController extends Controller
{
    /**
     * Отображает список преподавателей университета.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TeacherUniversity::all()]);
    }

    /**
     * Сохраняет нового преподавателя университета в хранилище.
     *
     * @param  TeacherUniversityRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TeacherUniversityRequest $request)
    {
        $data = $request->validated();

        $service = new TeacherUniversityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет указанного преподавателя университета в хранилище.
     *
     * @param  TeacherUniversityRequest  $request
     * @param  TeacherUniversity  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TeacherUniversityRequest $request, TeacherUniversity $dataId)
    {
        $data = $request->validated();
        $service = new TeacherUniversityService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанного преподавателя университета из хранилища.
     *
     * @param  TeacherUniversity  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TeacherUniversity $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
