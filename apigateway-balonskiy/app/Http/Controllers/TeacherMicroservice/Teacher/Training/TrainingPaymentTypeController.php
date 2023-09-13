<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingPaymentTypeRequest;
use App\Models\Teacher\Training\TrainingPaymentType;
use App\Services\Teacher\Training\TrainingPaymentTypeService;

class TrainingPaymentTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TrainingPaymentType::all()]);
    }

    public function create(TrainingPaymentTypeRequest $request)
    {
        $data = $request->validated();

        $service = new TrainingPaymentTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(TrainingPaymentTypeRequest $request, TrainingPaymentType $dataId)
    {
        $data = $request->validated();

        $service = new TrainingPaymentTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(TrainingPaymentType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
