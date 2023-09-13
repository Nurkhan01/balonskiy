<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecreeGosoTemplatesRequest;
use App\Http\Resources\DecreeGosoTemplatesResource;
use App\Models\DecreeGosoTemplates;
use App\Services\DecreeGosoTemplatesService;
use Illuminate\Http\Request;

class DecreeGosoTemplatesController extends Controller
{
    public function index()
    {
        $data = DecreeGosoTemplates::all();
        return DecreeGosoTemplatesResource::collection($data);
    }

    public function create(DecreeGosoTemplatesRequest $request)
    {
        $data = $request->validated();
        $service = new DecreeGosoTemplatesService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(DecreeGosoTemplatesRequest $request, DecreeGosoTemplates $dataId)
    {
        $data = $request->validated();
        $service = new DecreeGosoTemplatesService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(DecreeGosoTemplates $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
