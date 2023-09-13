<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\UniversityBuildingRequest;
use App\Http\Resources\Building\UniversityBuildingResource;
use App\Models\UniversityBuilding;
use App\Services\Building\UniversityBuildingCreateService;
use App\Services\Building\UniversityBuildingUpdateService;
use Illuminate\Http\Request;

class UniversityBuildingController extends Controller
{
    public function index()
    {
        $data = UniversityBuilding::all();
        return UniversityBuildingResource::collection($data);
    }

    public function create(UniversityBuildingRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityBuildingCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(UniversityBuildingRequest $request, UniversityBuilding $universityBuilding)
    {
        $data = $request->validated();

        $service = new UniversityBuildingUpdateService();
        $yourModel = $service->update($universityBuilding, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(UniversityBuilding $universityBuilding)
    {
        $universityBuilding->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
