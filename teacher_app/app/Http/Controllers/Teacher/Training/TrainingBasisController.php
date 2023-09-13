<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingBasisRequest;
use App\Models\Teacher\Training\TrainingBasis;
use App\Services\Teacher\Training\TrainingBasisService;

class TrainingBasisController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TrainingBasis::all()]);
    }

    public function create(TrainingBasisRequest $request)
    {
        $data = $request->validated();
        $service = new TrainingBasisService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(TrainingBasisRequest $request, TrainingBasis $dataId)
    {
        $data = $request->validated();
        $service = new TrainingBasisService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(TrainingBasis $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
