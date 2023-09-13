<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditTimeTypeRequest;
use App\Http\Resources\CreditTimeTypeResource;
use App\Models\CreditTimeType;
use App\Services\CreditTimeTypeService;
use Illuminate\Http\Request;

class CreditTimeTypeController extends Controller
{
    public function index()
    {
        $data = CreditTimeType::all();
        return CreditTimeTypeResource::collection($data);
    }

    public function create(CreditTimeTypeRequest $request)
    {
        $data = $request->validated();

        $service = new CreditTimeTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(CreditTimeTypeRequest $request, CreditTimeType $dataId)
    {
        $data = $request->validated();

        $service = new CreditTimeTypeService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(CreditTimeType $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
