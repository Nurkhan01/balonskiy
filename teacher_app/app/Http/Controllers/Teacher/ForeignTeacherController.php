<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\ForeignTeacherRequest;
use App\Models\Teacher\ForeignTeacher;
use App\Services\Teacher\ForeignTeacherService;

class ForeignTeacherController extends Controller
{
    public function index()
    {
        return response()->json(['data' => ForeignTeacher::all()]);
    }

    public function create(ForeignTeacherRequest $request)
    {
        $data = $request->validated();

        $service = new ForeignTeacherService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(ForeignTeacherRequest $request, ForeignTeacher $dataId)
    {
        $data = $request->validated();

        $service = new ForeignTeacherService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(ForeignTeacher $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
