<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\ForeignTeacherConsultationRequest;
use App\Models\Teacher\ForeignTeacherConsultation;
use App\Services\Teacher\ForeignTeacherConsultationService;

class ForeignTeacherConsultationController extends Controller
{
    public function index()
    {
        return response()->json(['data' => ForeignTeacherConsultation::all()]);
    }

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

    public function delete(ForeignTeacherConsultation $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
