<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\DevelopingSectionRequest;
use App\Models\Student\DevelopingSection\DevelopingSection;
use App\Services\Student\DevelopingSection\DevelopingSectionService;

class DevelopingSectionController extends Controller
{
    public function index()
    {
        return response()->json(['data' => DevelopingSection::all()]);
    }

    public function create(DevelopingSectionRequest $request)
    {
        $data = $request->validated();
        $service = new DevelopingSectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(DevelopingSectionRequest $request, DevelopingSection $developingSection)
    {
        $data = $request->validated();
        $service = new DevelopingSectionService();
        $yourModel = $service->update($developingSection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(DevelopingSection $developingSection)
    {
        $developingSection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
