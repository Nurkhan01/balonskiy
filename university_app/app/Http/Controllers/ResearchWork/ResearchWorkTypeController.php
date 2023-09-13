<?php

namespace App\Http\Controllers\ResearchWork;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchWork\ResearchWorkTypeRequest;
use App\Http\Resources\ResearchWork\ResearchWorkTypeResource;
use App\Models\ResearchWorkType;
use App\Services\ResearchWork\ResearchWorkTypeCreateService;
use App\Services\ResearchWork\ResearchWorkTypeUpdateService;
use Illuminate\Http\Request;

class ResearchWorkTypeController extends Controller
{
    public function index()
    {
        $data = ResearchWorkType::all();
        return ResearchWorkTypeResource::collection($data);
    }

    public function create(ResearchWorkTypeRequest $request)
    {
        $data = $request->validated();
        $service = new ResearchWorkTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(ResearchWorkTypeRequest $request, ResearchWorkType $researchWorkType)
    {
        $data = $request->validated();

        $service = new ResearchWorkTypeUpdateService();
        $yourModel = $service->update($researchWorkType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(ResearchWorkType $researchWorkType)
    {
        $researchWorkType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
