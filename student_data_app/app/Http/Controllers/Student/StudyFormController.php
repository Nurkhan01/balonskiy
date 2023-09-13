<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudyFormRequest;
use App\Http\Requests\UpdateStudyFormRequest;
use App\Models\Student\StudyForm;
use App\Services\Student\StudyFormService;

class StudyFormController extends Controller
{
    public function index()
    {
        return response()->json(['data' => StudyForm::all()]);
    }

    public function create(StudyFormRequest $request)
    {
        $data = $request->validated();
        $service = new StudyFormService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(StudyFormRequest $request, StudyForm $studyForm)
    {
        $data = $request->validated();
        $service = new StudyFormService();
        $yourModel = $service->update($studyForm, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(StudyForm $studyForm)
    {
        $studyForm->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
