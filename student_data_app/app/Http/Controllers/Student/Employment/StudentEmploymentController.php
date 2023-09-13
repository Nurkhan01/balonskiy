<?php

namespace App\Http\Controllers\Student\Employment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\Employment\StudentEmploymentRequest;
use App\Models\Student\Employment\StudentEmployment;
use App\Services\Student\Employment\StudentEmploymentService;

class StudentEmploymentController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentEmployment::all()]);
    }

    public function create(StudentEmploymentRequest $request)
    {
        $data = $request->validated();

        $service = new StudentEmploymentService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    public function update(StudentEmploymentRequest $request, StudentEmployment $studentEmployment)
    {
        $data = $request->validated();

        $service = new StudentEmploymentService();
        $yourModel = $service->update($studentEmployment, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudentEmployment $studentEmployment)
    {
        $studentEmployment->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
