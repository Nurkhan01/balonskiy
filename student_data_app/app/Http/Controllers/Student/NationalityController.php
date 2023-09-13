<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\NationalityRequest;
use App\Models\Student\Nationality;
use App\Services\Student\NationalityService;

class NationalityController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Nationality::all()]);
    }

    public function create(NationalityRequest $request)
    {
        $data = $request->validated();
        $service = new NationalityService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(NationalityRequest $request, Nationality $nationality)
    {
        $data = $request->validated();
        $service = new NationalityService();
        $yourModel = $service->update($nationality, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Nationality $nationality)
    {
        $nationality->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
