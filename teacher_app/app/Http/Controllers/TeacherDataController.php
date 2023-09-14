<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherDataRequest;
use App\Models\TeacherData;
use App\Services\TeacherDataService;
use Illuminate\Http\Request;

class TeacherDataController extends Controller
{
    /**
     * Отображает список преподавателей.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TeacherData::all()]);
    }

    /**
     * Сохраняет нового преподавателя в хранилище.
     *
     * @param  TeacherDataRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TeacherDataRequest $request)
    {
        $data = $request->validated();
        $service = new TeacherDataService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет указанного преподавателя в хранилище.
     *
     * @param  TeacherDataRequest  $request
     * @param  TeacherData  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TeacherDataRequest $request, TeacherData $dataId)
    {
        $data = $request->validated();
        $service = new TeacherDataService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанного преподавателя из хранилища.
     *
     * @param  TeacherData  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TeacherData $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
