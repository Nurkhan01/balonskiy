<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationProgramRequest;
use App\Http\Resources\EducationProgramResource;
use App\Models\EducationProgram;
use App\Services\EducationProgramService;

class EducationProgramController extends Controller
{
    public function index()
    {
        $data = EducationProgram::all();
        return EducationProgramResource::collection($data);
    }

    public function create(EducationProgramRequest $request)
    {
        $data = $request->validated();
        $service = new EducationProgramService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationProgramRequest $request, EducationProgram $educationProgram)
    {
        $data = $request->validated();
        $service = new EducationProgramService();
        $yourModel = $service->update($educationProgram, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationProgram $educationProgram)
    {
        $educationProgram->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
