<?php

namespace App\Http\Controllers\ResearchWork;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchWork\ResearchWorkRequest;
use App\Http\Resources\ResearchWork\ResearchWorkResource;
use App\Models\ResearchWork;
use App\Services\ResearchWork\ResearchWorkCreateService;
use App\Services\ResearchWork\ResearchWorkUpdateService;
use Illuminate\Http\Request;

class ResearchWorkController extends Controller
{
    public function index()
    {
        $data = ResearchWork::all();
        return ResearchWorkResource::collection($data);
    }

    public function create(ResearchWorkRequest $request)
    {
        $data = $request->validated();
        $service = new ResearchWorkCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(ResearchWorkRequest $request, ResearchWork $researchWork)
    {
        $data = $request->validated();
        $service = new ResearchWorkUpdateService();
        $yourModel = $service->update($researchWork, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(ResearchWork $researchWork)
    {
        $researchWork->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
