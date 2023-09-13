<?php

namespace App\Http\Controllers\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Publication\TeacherPublicationRequest;
use App\Models\Teacher\Publication\TeacherPublication;
use App\Services\Teacher\Publication\TeacherPublicationService;

class TeacherPublicationController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TeacherPublication::all()]);
    }

    public function create(TeacherPublicationRequest $request)
    {
        $data = $request->validated();
        $service = new TeacherPublicationService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(TeacherPublicationRequest $request, TeacherPublication $dataId)
    {
        $data = $request->validated();
        $service = new TeacherPublicationService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(TeacherPublication $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
