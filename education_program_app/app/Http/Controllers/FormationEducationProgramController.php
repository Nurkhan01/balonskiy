<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationEducationProgramRequest;
use App\Http\Resources\FormationEducationProgramResource;
use App\Models\FormationEducationProgram;
use App\Services\FormationEducationProgramService;
use Illuminate\Http\Request;

class FormationEducationProgramController extends Controller
{
    public function index()
    {
        $data = FormationEducationProgram::all();
        return FormationEducationProgramResource::collection($data);
    }

    public function create(FormationEducationProgramRequest $request)
    {
        $data = $request->validated();
        $service = new FormationEducationProgramService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(FormationEducationProgramRequest $request, FormationEducationProgram $dataId)
    {
        $data = $request->validated();
        $service = new FormationEducationProgramService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(FormationEducationProgram $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
