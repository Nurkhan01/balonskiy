<?php

namespace App\Http\Controllers;

use App\Http\Requests\JointEpFinancingSourceRequest;
use App\Http\Resources\JointEpFinancingSourceResource;
use App\Models\JointEpFinancingSource;
use App\Services\JointEpFinancingSourceService;
use Illuminate\Http\Request;

class JointEpFinancingSourceController extends Controller
{
    public function index()
    {
        $data = JointEpFinancingSource::all();
        return JointEpFinancingSourceResource::collection($data);
    }

    public function create(JointEpFinancingSourceRequest $request)
    {
        $data = $request->validated();
        $service = new JointEpFinancingSourceService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(JointEpFinancingSourceRequest $request, JointEpFinancingSource $dataId)
    {
        $data = $request->validated();
        $service = new JointEpFinancingSourceService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(JointEpFinancingSource $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
