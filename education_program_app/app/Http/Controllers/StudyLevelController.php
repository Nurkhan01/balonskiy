<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyLevelRequest;
use App\Http\Resources\StudyLevelResource;
use App\Models\StudyLevel;
use App\Services\StudyLevelService;
use Illuminate\Http\Request;

class StudyLevelController extends Controller
{
    public function index()
    {
        $data = StudyLevel::all();
        return StudyLevelResource::collection($data);
    }

    public function create(StudyLevelRequest $request)
    {
        $data = $request->validated();
        $service = new StudyLevelService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudyLevelRequest $request, StudyLevel $studyLevel)
    {
        $data = $request->validated();
        $service = new StudyLevelService();
        $yourModel = $service->update($studyLevel, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudyLevel $studyLevel)
    {
        $studyLevel->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
