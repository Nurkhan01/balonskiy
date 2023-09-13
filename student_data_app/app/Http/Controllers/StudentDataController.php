<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentDataRequest;
use App\Models\StudentData;
use App\Services\StudentDataService;

class StudentDataController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentData::all()]);
    }

    public function create(StudentDataRequest $request)
    {
        $data = $request->validated();
        $service = new StudentDataService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudentDataRequest $request, StudentData $studentData)
    {
        $data = $request->validated();
        $service = new StudentDataService();
        $yourModel = $service->update($studentData, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudentData $studentData)
    {
        $studentData->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
