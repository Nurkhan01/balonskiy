<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TeacherTrainingRequest;
use App\Models\Teacher\Training\TeacherTraining;
use App\Services\Teacher\Training\TeacherTrainingService;
use Illuminate\Http\Request;

class TeacherTrainingController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TeacherTraining::all()]);
    }

    public function create(TeacherTrainingRequest $request)
    {
        $data = $request->validated();
        $service = new TeacherTrainingService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(TeacherTrainingRequest $request, TeacherTraining $dataId)
    {
        $data = $request->validated();
        $service = new TeacherTrainingService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(TeacherTraining $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
