<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationGroupRequest;
use App\Http\Resources\EducationGroupResource;
use App\Models\EducationGroup;
use App\Services\EducationGroupService;
use Illuminate\Http\Request;

class EducationGroupController extends Controller
{
    public function index()
    {
        $data = EducationGroup::all();
        return EducationGroupResource::collection($data);
    }

    public function create(EducationGroupRequest $request)
    {
        $data = $request->validated();
        $service = new EducationGroupService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationGroupRequest $request, EducationGroup $educationGroup)
    {
        $data = $request->validated();
        $service = new EducationGroupService();
        $yourModel = $service->update($educationGroup, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationGroup $educationGroup)
    {
        $educationGroup->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
