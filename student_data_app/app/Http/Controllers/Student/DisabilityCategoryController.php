<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DisabilityCategoryRequest;
use App\Models\Student\DisabilityCategory;
use App\Services\Student\DisabilityCategoryService;

class DisabilityCategoryController extends Controller
{
    public function index()
    {
        return response()->json(['data' => DisabilityCategory::all()]);
    }

    public function create(DisabilityCategoryRequest $request)
    {
        $data = $request->validated();
        $service = new DisabilityCategoryService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(DisabilityCategoryRequest $request, DisabilityCategory $disabilityCategory)
    {
        $data = $request->validated();
        $service = new DisabilityCategoryService();
        $yourModel = $service->update($disabilityCategory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(DisabilityCategory $disabilityCategory)
    {
        $disabilityCategory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
