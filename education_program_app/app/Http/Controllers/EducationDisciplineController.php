<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationDisciplineRequest;
use App\Http\Resources\EducationDisciplineResource;
use App\Models\EducationDiscipline;
use App\Services\EducationDisciplineService;
use Illuminate\Http\Request;

class EducationDisciplineController extends Controller
{
    public function index()
    {
        $data = EducationDiscipline::all();
        return EducationDisciplineResource::collection($data);
    }

    public function create(EducationDisciplineRequest $request)
    {
        $data = $request->validated();
        $service = new EducationDisciplineService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(EducationDisciplineRequest $request, EducationDiscipline $dataId)
    {
        $data = $request->validated();
        $service = new EducationDisciplineService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationDiscipline $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
