<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\BuildingRequest;
use App\Http\Resources\Building\BuildingResource;
use App\Models\Building;
use App\Services\Building\BuildingCreateService;
use App\Services\Building\BuildingUpdateService;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $data = Building::all();
        return BuildingResource::collection($data);
    }

    public function create(BuildingRequest $request)
    {
        $data = $request->validated();
        $service = new BuildingCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(BuildingRequest $request, Building $building)
    {
        $data = $request->validated();
        $service = new BuildingUpdateService();
        $yourModel = $service->update($building, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(Building $building)
    {
        $building->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
