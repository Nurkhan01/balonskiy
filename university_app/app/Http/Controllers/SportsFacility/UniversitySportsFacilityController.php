<?php

namespace App\Http\Controllers\SportsFacility;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportsFacility\UniversitySportsFacilityRequest;
use App\Http\Resources\SportsFacility\UniversitySportsFacilityResource;
use App\Models\UniversitySportsFacility;
use App\Services\SportsFacility\UniversitySportsFacilityCreateService;
use App\Services\SportsFacility\UniversitySportsFacilityUpdateService;
use Illuminate\Http\Request;

class UniversitySportsFacilityController extends Controller
{
    public function index()
    {
        $data = UniversitySportsFacility::all();
        return UniversitySportsFacilityResource::collection($data);
    }

    public function create(UniversitySportsFacilityRequest $request)
    {
        $data = $request->validated();

        $service = new UniversitySportsFacilityCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(UniversitySportsFacilityRequest $request, UniversitySportsFacility $universitySportsFacility)
    {
        $data = $request->validated();

        $service = new UniversitySportsFacilityUpdateService();
        $yourModel = $service->update($universitySportsFacility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(UniversitySportsFacility $universitySportsFacility)
    {
        $universitySportsFacility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
