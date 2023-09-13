<?php

namespace App\Http\Controllers\Student\Employment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\Employment\EmploymentRequest;
use App\Models\Student\Employment\Employment;
use App\Services\Student\Employment\EmploymentService;

class EmploymentController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Employment::all()]);
    }

    public function create(EmploymentRequest $request)
    {
        $data = $request->validated();

        $service = new EmploymentService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(EmploymentRequest $request, Employment $employment)
    {
        $data = $request->validated();

        $service = new EmploymentService();
        $yourModel = $service->update($employment, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Employment $employment)
    {
        $employment->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
