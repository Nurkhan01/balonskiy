<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherLanguageRequest;
use App\Models\Teacher\TeacherLanguage;
use App\Services\Teacher\TeacherLanguageService;
use Illuminate\Http\Request;

class TeacherLanguageController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TeacherLanguage::all()]);
    }

    public function create(TeacherLanguageRequest $request)
    {
        $data = $request->validated();

        $service = new TeacherLanguageService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(TeacherLanguageRequest $request, TeacherLanguage $dataId)
    {
        $data = $request->validated();
        $service = new TeacherLanguageService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(TeacherLanguage $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
