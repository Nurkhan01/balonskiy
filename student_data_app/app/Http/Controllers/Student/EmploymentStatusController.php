<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\EmploymentStatusRequest;
use App\Models\Student\EmploymentStatus;
use App\Services\Student\EmploymentStatusService;

class EmploymentStatusController extends Controller
{
    public function index()
    {
        return response()->json(['data' => EmploymentStatus::all()]);
    }

    public function create(EmploymentStatusRequest $request)
    {
        $data = $request->validated();
        $service = new EmploymentStatusService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EmploymentStatusRequest $request, EmploymentStatus $employmentStatus)
    {
        $data = $request->validated();
        $service = new EmploymentStatusService();
        $yourModel = $service->update($employmentStatus, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EmploymentStatus $employmentStatus)
    {
        $employmentStatus->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
