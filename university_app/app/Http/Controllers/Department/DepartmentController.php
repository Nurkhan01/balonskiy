<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\DepartmentRequest;
use App\Http\Resources\Department\DepartmentResource;
use App\Models\Department;
use App\Services\Department\DepartmentCreateService;
use App\Services\Department\DepartmentUpdateService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $university_id = $request->query('university_id', null);
        if($university_id){
            $data = Department::where('university_id', $university_id)->get();
            return DepartmentResource::collection($data);
        }
        return response()->json(['error' => "University ID doesn't exists"], 422);
    }

    public function create(DepartmentRequest $request)
    {
        $data = $request->validated();

        $service = new DepartmentCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(DepartmentRequest $request, Department $department)
    {
        $data = $request->validated();

        $service = new DepartmentUpdateService();
        $yourModel = $service->update($department, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(Department $department)
    {

        $department->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
