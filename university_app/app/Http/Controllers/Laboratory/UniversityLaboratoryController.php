<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Laboratory\UniversityLaboratoryRequest;
use App\Http\Resources\Laboratory\UniversityLaboratoryResource;
use App\Models\UniversityLaboratory;
use App\Services\Laboratory\UniversityLaboratoryCreateService;
use App\Services\Laboratory\UniversityLaboratoryUpdateService;
use Illuminate\Http\Request;

class UniversityLaboratoryController extends Controller
{
    public function index()
    {
        $data = UniversityLaboratory::all();
        return UniversityLaboratoryResource::collection($data);
    }

    public function create(UniversityLaboratoryRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityLaboratoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(UniversityLaboratoryRequest $request, UniversityLaboratory $universityLaboratory)
    {
        $data = $request->validated();
        $service = new UniversityLaboratoryUpdateService();
        $yourModel = $service->update($universityLaboratory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(UniversityLaboratory $universityLaboratory)
    {
        $universityLaboratory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
