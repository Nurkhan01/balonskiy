<?php

namespace App\Http\Controllers;

use App\Http\Requests\GosoComponentNameRequest;
use App\Http\Resources\GosoComponentNameResource;
use App\Models\GosoComponentName;
use App\Services\GosoComponentNameService;
use Illuminate\Http\Request;

class GosoComponentNameController extends Controller
{
    public function index()
    {
        $data = GosoComponentName::all();
        return GosoComponentNameResource::collection($data);
    }

    public function create(GosoComponentNameRequest $request)
    {
        $data = $request->validated();
        $service = new GosoComponentNameService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(GosoComponentNameRequest $request, GosoComponentName $dataId)
    {
        $data = $request->validated();
        $service = new GosoComponentNameService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(GosoComponentName $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
