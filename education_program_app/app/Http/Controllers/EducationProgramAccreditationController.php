<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationProgramAccreditationRequest;
use App\Http\Resources\EducationProgramAccreditationResource;
use App\Models\EducationProgramAccreditation;
use App\Services\EducationProgramAccreditationService;
use Illuminate\Http\Request;

class EducationProgramAccreditationController extends Controller
{
    public function index()
    {
        $data = EducationProgramAccreditation::all();
        return EducationProgramAccreditationResource::collection($data);
    }

    public function create(EducationProgramAccreditationRequest $request)
    {
        $data = $request->validated();
        $service = new EducationProgramAccreditationService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationProgramAccreditationRequest $request, EducationProgramAccreditation $dataId)
    {
        $data = $request->validated();
        $service = new EducationProgramAccreditationService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationProgramAccreditation $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
