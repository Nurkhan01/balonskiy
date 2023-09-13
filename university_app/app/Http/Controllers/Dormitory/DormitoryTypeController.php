<?php

namespace App\Http\Controllers\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dermitory\DormitoryTypeRequest;
use App\Http\Resources\Dermitory\DormitoryTypeResource;
use App\Models\DormitoryType;
use App\Services\Dormitory\DormitoryTypeCreateService;
use App\Services\Dormitory\DormitoryTypeUpdateService;

class DormitoryTypeController extends Controller
{
    public function index()
    {
        $data = DormitoryType::all();
        return DormitoryTypeResource::collection($data);
    }

    public function create(DormitoryTypeRequest $request)
    {
        $data = $request->validated();

        $service = new DormitoryTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(DormitoryTypeRequest $request, DormitoryType $dormitoryType)
    {
        $data = $request->validated();
        $service = new DormitoryTypeUpdateService();
        $yourModel = $service->update($dormitoryType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(DormitoryType $dormitoryType)
    {
        $dormitoryType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
