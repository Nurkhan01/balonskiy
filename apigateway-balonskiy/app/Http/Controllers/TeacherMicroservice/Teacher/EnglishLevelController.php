<?php

namespace App\Http\Controllers\TeacherMicroservice\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\EnglishLevelRequest;
use App\Models\Teacher\EnglishLevel;
use App\Services\Teacher\EnglishLevelService;

class EnglishLevelController extends Controller
{
    public function index()
    {
        return response()->json(['data' => EnglishLevel::all()]);
    }

    public function create(EnglishLevelRequest $request)
    {
        $data = $request->validated();

        $service = new EnglishLevelService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(EnglishLevelRequest $request, EnglishLevel $dataId)
    {
        $data = $request->validated();

        $service = new EnglishLevelService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(EnglishLevel $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
