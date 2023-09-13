<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentSportsCategoryRequest;
use App\Http\Requests\UpdateStudentSportsCategoryRequest;
use App\Models\Student\StudentSportsCategory;
use App\Services\Student\StudentSportsCategoryService;

class StudentSportsCategoryController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudentSportsCategory::all()]);
    }

    public function create(StudentSportsCategoryRequest $request)
    {
        $data = $request->validated();
        $service = new StudentSportsCategoryService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudentSportsCategoryRequest $request, StudentSportsCategory $studentSportsCategory)
    {
        $data = $request->validated();
        $service = new StudentSportsCategoryService();
        $yourModel = $service->update($studentSportsCategory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudentSportsCategory $studentSportsCategory)
    {
        $studentSportsCategory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
