<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationDirectionRequest;
use App\Http\Resources\EducationDirectionResource;
use App\Models\EducationDirection;
use App\Services\EducationDirectionService;
use Illuminate\Http\Request;

class EducationDirectionController extends Controller
{
    public function index()
    {
        $data = EducationDirection::all();
        return EducationDirectionResource::collection($data);
    }

    public function create(EducationDirectionRequest $request)
    {
        $data = $request->validated();
        $service = new EducationDirectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationDirectionRequest $request, EducationDirection $educationDirection)
    {
        $data = $request->validated();
        $service = new EducationDirectionService();
        $yourModel = $service->update($educationDirection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationDirection $educationDirection)
    {
        $educationDirection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
