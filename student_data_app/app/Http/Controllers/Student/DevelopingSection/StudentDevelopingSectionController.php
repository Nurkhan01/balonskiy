<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\StudentDevelopingSectionRequest;
use App\Models\Student\DevelopingSection\StudentDevelopingSection;
use App\Services\Student\DevelopingSection\StudentDevelopingSectionService;

class StudentDevelopingSectionController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentDevelopingSection::all()]);
    }

    public function create(StudentDevelopingSectionRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDevelopingSectionService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    public function update(StudentDevelopingSectionRequest $request, StudentDevelopingSection $studentDevelopingSection)
    {
        $data = $request->validated();
        $service = new StudentDevelopingSectionService();
        $yourModel = $service->update($studentDevelopingSection, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }


    public function delete(StudentDevelopingSection $studentDevelopingSection)
    {
        $studentDevelopingSection->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
