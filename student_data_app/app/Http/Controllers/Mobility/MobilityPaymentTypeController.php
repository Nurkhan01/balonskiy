<?php

namespace App\Http\Controllers\Mobility;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\MobilityPaymentTypeRequest;
use App\Models\Mobility\MobilityPaymentType;
use App\Services\Mobility\MobilityPaymentTypeService;

class MobilityPaymentTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => MobilityPaymentType::all()]);
    }

    public function create(MobilityPaymentTypeRequest $request)
    {
        $data = $request->validated();
        $service = new MobilityPaymentTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(MobilityPaymentTypeRequest $request, MobilityPaymentType $mobilityPaymentType)
    {
        $data = $request->validated();
        $service = new MobilityPaymentTypeService();
        $yourModel = $service->update($mobilityPaymentType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(MobilityPaymentType $mobilityPaymentType)
    {
        $mobilityPaymentType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
