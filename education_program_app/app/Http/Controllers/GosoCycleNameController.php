<?php

namespace App\Http\Controllers;

use App\Http\Requests\GosoCycleNameRequest;
use App\Http\Resources\GosoCycleNameResource;
use App\Models\GosoCycleName;
use App\Services\GosoCycleNameService;
use Illuminate\Http\Request;

class GosoCycleNameController extends Controller
{
    public function index()
    {
        $data = GosoCycleName::all();
        return GosoCycleNameResource::collection($data);
    }

    public function create(GosoCycleNameRequest $request)
    {
        $data = $request->validated();
        $service = new GosoCycleNameService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(GosoCycleNameRequest $request, GosoCycleName $dataId)
    {
        $data = $request->validated();
        $service = new GosoCycleNameService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(GosoCycleName $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
