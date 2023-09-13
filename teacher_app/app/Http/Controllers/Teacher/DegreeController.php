<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\DegreeRequest;
use App\Models\Teacher\Degree;
use App\Services\Teacher\DegreeService;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Degree::all()]);
    }

    public function create(DegreeRequest $request)
    {
        $data = $request->validated();

        $service = new DegreeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(DegreeRequest $request, Degree $dataId)
    {
        $data = $request->validated();

        $service = new DegreeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(Degree $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
