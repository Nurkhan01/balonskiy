<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherFinancingTypeRequest;
use App\Models\Teacher\TeacherFinancingType;
use App\Services\Teacher\TeacherFinancingTypeService;

class TeacherFinancingTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TeacherFinancingType::all()]);
    }

    public function create(TeacherFinancingTypeRequest $request)
    {
        $data = $request->validated();

        $service = new TeacherFinancingTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(TeacherFinancingTypeRequest $request, TeacherFinancingType $dataId)
    {
        $data = $request->validated();

        $service = new TeacherFinancingTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(TeacherFinancingType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
