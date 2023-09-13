<?php

namespace App\Http\Controllers\SpecialNeedsCondition;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialNeedsCondition\SpecialNeedsConditionRequest;
use App\Http\Resources\SpecialNeedsCondition\SpecialNeedsConditionResource;
use App\Models\SpecialNeedsCondition;
use App\Services\SpecialNeedsCondition\SpecialNeedsConditionCreateService;
use App\Services\SpecialNeedsCondition\SpecialNeedsConditionUpdateService;

class SpecialNeedsConditionController extends Controller
{
    public function index()
    {
        $data = SpecialNeedsCondition::all();
        return SpecialNeedsConditionResource::collection($data);
    }

    public function create(SpecialNeedsConditionRequest $request)
    {
        $data = $request->validated();

        $service = new SpecialNeedsConditionCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(SpecialNeedsConditionRequest $request, SpecialNeedsCondition $specialNeedsCondition)
    {
        $data = $request->validated();

        $service = new SpecialNeedsConditionUpdateService();
        $yourModel = $service->update($specialNeedsCondition, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(SpecialNeedsCondition $specialNeedsCondition)
    {
        $specialNeedsCondition->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
