<?php

namespace App\Http\Controllers;

use App\Http\Requests\JointEducationProgramRequest;
use App\Http\Resources\JointEducationProgramResource;
use App\Models\JointEducationProgram;
use App\Services\JointEducationProgramService;
use Illuminate\Http\Request;

class JointEducationProgramController extends Controller
{
    public function index()
    {
        $data = JointEducationProgram::all();
        return JointEducationProgramResource::collection($data);
    }

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

    public function delete(JointEducationProgram $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
