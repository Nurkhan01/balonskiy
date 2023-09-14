<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\ForeignTeacherConsultationRequest;
use App\Models\Teacher\ForeignTeacherConsultation;
use App\Services\Teacher\ForeignTeacherConsultationService;

class ForeignTeacherConsultationController extends Controller
{
    /**
     * Отображает список консультаций иностранного преподавателя.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => ForeignTeacherConsultation::all()]);
    }

    /**
     * Сохраняет новую консультацию иностранного преподавателя в хранилище.
     *
     * @param  ForeignTeacherConsultationRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ForeignTeacherConsultationRequest $request)
    {
        $data = $request->validated();

        $service = new ForeignTeacherConsultationService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет указанную консультацию иностранного преподавателя в хранилище.
     *
     * @param  ForeignTeacherConsultationRequest  $request
     * @param  ForeignTeacherConsultation  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ForeignTeacherConsultationRequest $request, ForeignTeacherConsultation $dataId)
    {
        $data = $request->validated();

        $service = new ForeignTeacherConsultationService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную консультацию иностранного преподавателя из хранилища.
     *
     * @param  ForeignTeacherConsultation  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(ForeignTeacherConsultation $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
