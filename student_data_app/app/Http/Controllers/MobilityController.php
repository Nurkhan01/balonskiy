<?php

namespace App\Http\Controllers;

use App\Http\Requests\MobilityRequest;
use App\Models\Mobility;
use App\Services\MobilityService;
use Illuminate\Http\Request;

class MobilityController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Mobility::all()]);
    }

    public function create(MobilityRequest $request)
    {
        $data = $request->validated();

        $service = new MobilityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(MobilityRequest $request, Mobility $mobility)
    {
        $data = $request->validated();
        $service = new MobilityService();
        $yourModel = $service->update($mobility, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Mobility $mobility)
    {
        $mobility->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
