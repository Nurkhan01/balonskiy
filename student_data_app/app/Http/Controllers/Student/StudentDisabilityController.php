<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentDisabilityRequest;
use App\Models\Student\StudentDisability;
use App\Services\Student\StudentDisabilityService;

class StudentDisabilityController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentDisability::all()]);
    }

    public function create(StudentDisabilityRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDisabilityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudentDisabilityRequest $request, StudentDisability $studentDisability)
    {
        $data = $request->validated();
        $service = new StudentDisabilityService();
        $yourModel = $service->update($studentDisability, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudentDisability $studentDisability)
    {
        $studentDisability->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
