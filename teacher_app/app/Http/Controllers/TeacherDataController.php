<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherDataRequest;
use App\Models\TeacherData;
use App\Services\TeacherDataService;
use Illuminate\Http\Request;

class TeacherDataController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TeacherData::all()]);
    }

    public function create(TeacherDataRequest $request)
    {
        $data = $request->validated();
        $service = new TeacherDataService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(TeacherDataRequest $request, TeacherData $dataId)
    {
        $data = $request->validated();
        $service = new TeacherDataService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(TeacherData $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
