<?php

namespace App\Http\Controllers\SportsFacility;

use App\Http\Controllers\Controller;
use App\Http\Requests\SportsFacility\SportsFacilityRequest;
use App\Http\Resources\SportsFacility\SportsFacilityResource;
use App\Models\SportsFacility;
use App\Services\SportsFacility\SportsFacilityCreateService;
use App\Services\SportsFacility\SportsFacilityUpdateService;
use Illuminate\Http\Request;

class SportsFacilityController extends Controller
{
    public function index()
    {
        $data = SportsFacility::all();
        return SportsFacilityResource::collection($data);
    }

    public function create(SportsFacilityRequest $request)
    {
        $data = $request->validated();
        $service = new SportsFacilityCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(SportsFacilityRequest $request, SportsFacility $sportsFacility)
    {
        $data = $request->validated();

        $service = new SportsFacilityUpdateService();
        $yourModel = $service->update($sportsFacility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(SportsFacility $sportsFacility)
    {
        $sportsFacility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
