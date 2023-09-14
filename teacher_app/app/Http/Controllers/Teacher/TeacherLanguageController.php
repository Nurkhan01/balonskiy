<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherLanguageRequest;
use App\Models\Teacher\TeacherLanguage;
use App\Services\Teacher\TeacherLanguageService;
use Illuminate\Http\Request;

class TeacherLanguageController extends Controller
{
    /**
     * Отображает список владеющих языков преподавателя.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => TeacherLanguage::all()]);
    }

    /**
     * Сохраняет новый владеющий язык преподавателя в хранилище.
     *
     * @param  TeacherLanguageRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TeacherLanguageRequest $request)
    {
        $data = $request->validated();

        $service = new TeacherLanguageService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет указанный владеющий язык преподавателя в хранилище.
     *
     * @param  TeacherLanguageRequest  $request
     * @param  TeacherLanguage  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TeacherLanguageRequest $request, TeacherLanguage $dataId)
    {
        $data = $request->validated();
        $service = new TeacherLanguageService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанный владеющий язык преподавателя из хранилища.
     *
     * @param  TeacherLanguage  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(TeacherLanguage $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
