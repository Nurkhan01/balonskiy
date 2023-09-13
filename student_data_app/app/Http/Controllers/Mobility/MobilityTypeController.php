<?php

namespace App\Http\Controllers\Mobility;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\MobilityTypeRequest;
use App\Models\Mobility\MobilityType;
use App\Services\Mobility\MobilityTypeService;

class MobilityTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => MobilityType::all()]);
    }

    public function create(MobilityTypeRequest $request)
    {
        $data = $request->validated();
        $service = new MobilityTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(MobilityTypeRequest $request, MobilityType $mobilityType)
    {
        $data = $request->validated();
        $service = new MobilityTypeService();
        $yourModel = $service->update($mobilityType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(MobilityType $mobilityType)
    {
        $mobilityType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
