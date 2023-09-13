<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationFieldRequest;
use App\Http\Resources\EducationFieldResource;
use App\Models\EducationField;
use App\Services\EducationFieldService;
use Illuminate\Http\Request;

class EducationFieldController extends Controller
{
    public function index()
    {
        $data = EducationField::all();
        return EducationFieldResource::collection($data);
    }

    public function create(EducationFieldRequest $request)
    {
        $data = $request->validated();
        $service = new EducationFieldService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationFieldRequest $request, EducationField $educationField)
    {
        $data = $request->validated();
        $service = new EducationFieldService();
        $yourModel = $service->update($educationField, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationField $educationField)
    {
        $educationField->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
