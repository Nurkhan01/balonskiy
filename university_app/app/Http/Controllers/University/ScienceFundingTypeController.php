<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use App\Http\Requests\University\ScienceFundingTypeRequest;
use App\Http\Resources\University\ScienceFundingTypeResource;
use App\Models\ScienceFundingType;
use App\Services\University\ScienceFundingTypeCreateService;
use App\Services\University\ScienceFundingTypeUpdateService;
use Illuminate\Http\Request;

class ScienceFundingTypeController extends Controller
{
    public function index()
    {
        $data = ScienceFundingType::all();
        return ScienceFundingTypeResource::collection($data);
    }

    public function create(ScienceFundingTypeRequest $request, ScienceFundingTypeCreateService $service)
    {
        $data = $request->validated();

        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(ScienceFundingTypeRequest $request, ScienceFundingTypeUpdateService $service, ScienceFundingType $scienceFundingType)
    {
        $data = $request->validated();
        $yourModel = $service->update($scienceFundingType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(ScienceFundingType $scienceFundingType)
    {
        $scienceFundingType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
