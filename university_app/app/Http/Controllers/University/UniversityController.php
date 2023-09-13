<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use App\Http\Requests\University\UniversityRequest;
use App\Http\Resources\University\UniversityResource;
use App\Models\University;
use App\Services\University\UniversityCreateService;
use App\Services\University\UniversityUpdateService;

class UniversityController extends Controller
{
    public function index()
    {
        $data = University::all();
        return UniversityResource::collection($data);
    }

    public function create(UniversityRequest $request, UniversityCreateService $service)
    {
        $data = $request->validated();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data'], 500);
    }


    public function update(UniversityRequest $request, UniversityUpdateService $service, University $university)
    {
        $data = $request->validated();
        $yourModel = $service->update($university, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(University $university)
    {
        $university->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
