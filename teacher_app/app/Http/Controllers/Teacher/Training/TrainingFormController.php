<?php

namespace App\Http\Controllers\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Training\TrainingFormRequest;
use App\Models\Teacher\Training\TrainingForm;
use App\Services\Teacher\Training\TrainingFormService;
use Illuminate\Http\Request;

class TrainingFormController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TrainingForm::all()]);
    }

    public function create(TrainingFormRequest $request)
    {
        $data = $request->validated();

        $service = new TrainingFormService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(TrainingFormRequest $request, TrainingForm $dataId)
    {
        $data = $request->validated();

        $service = new TrainingFormService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(TrainingForm $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
