<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\DevelopmentSectionTypeRequest;
use App\Models\Student\DevelopingSection\DevelopmentSectionType;
use App\Services\Student\DevelopingSection\DevelopmentSectionTypeService;


class DevelopmentSectionTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => DevelopmentSectionType::all()]);
    }

    public function create(DevelopmentSectionTypeRequest $request)
    {
        $data = $request->validated();
        $service = new DevelopmentSectionTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    public function update(DevelopmentSectionTypeRequest $request, DevelopmentSectionType $developmentSectionType)
    {
        $data = $request->validated();
        $service = new DevelopmentSectionTypeService();
        $yourModel = $service->update($developmentSectionType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(DevelopmentSectionType $developmentSectionType)
    {
        $developmentSectionType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
