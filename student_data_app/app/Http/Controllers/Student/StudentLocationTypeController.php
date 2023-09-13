<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentLocationTypeRequest;
use App\Http\Requests\Student\UpdateStudentLocationTypeRequest;
use App\Models\Student\StudentLocationType;
use App\Services\Student\StudentLocationTypeService;

class StudentLocationTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentLocationType::all()]);
    }

    public function create(StudentLocationTypeRequest $request)
    {
        $data = $request->validated();
        $service = new StudentLocationTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudentLocationTypeRequest $request, StudentLocationType $studentLocationType)
    {
        $data = $request->validated();
        $service = new StudentLocationTypeService();
        $yourModel = $service->update($studentLocationType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudentLocationType $studentLocationType)
    {
        $studentLocationType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
