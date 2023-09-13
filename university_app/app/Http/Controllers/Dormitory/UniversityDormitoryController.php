<?php

namespace App\Http\Controllers\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dermitory\UniversityDormitoryRequest;
use App\Http\Resources\Dermitory\UniversityDormitoryResource;
use App\Models\UniversityDormitory;
use App\Services\Dormitory\UniversityDormitoryCreateService;
use App\Services\Dormitory\UniversityDormitoryUpdateService;

class UniversityDormitoryController extends Controller
{
    public function index()
    {
        $data = UniversityDormitory::all();
        return UniversityDormitoryResource::collection($data);
    }

    public function create(UniversityDormitoryRequest $request)
    {
        $data = $request->validated();
        $service = new UniversityDormitoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(UniversityDormitoryRequest $request, UniversityDormitory $universityDormitory)
    {
        $data = $request->validated();
        $service = new UniversityDormitoryUpdateService();
        $yourModel = $service->update($universityDormitory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(UniversityDormitory $universityDormitory)
    {
        $universityDormitory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
