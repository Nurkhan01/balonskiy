<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduateDocumentTypeRequest;
use App\Http\Resources\GraduateDocumentTypeResource;
use App\Models\GraduateDocumentType;
use App\Services\GraduateDocumentTypeService;
use Illuminate\Http\Request;

class GraduateDocumentTypeController extends Controller
{
    public function index()
    {
        $data = GraduateDocumentType::all();
        return GraduateDocumentTypeResource::collection($data);
    }

    public function create(GraduateDocumentTypeRequest $request)
    {
        $data = $request->validated();
        $service = new GraduateDocumentTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(GraduateDocumentTypeRequest $request, GraduateDocumentType $dataId)
    {
        $data = $request->validated();
        $service = new GraduateDocumentTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(GraduateDocumentType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
