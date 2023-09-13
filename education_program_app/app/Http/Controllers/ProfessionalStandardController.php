<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalStandardRequest;
use App\Http\Resources\ProfessionalStandardResource;
use App\Models\ProfessionalStandard;
use App\Services\ProfessionalStandardService;
use Illuminate\Http\Request;

class ProfessionalStandardController extends Controller
{
    public function index()
    {
        $data = ProfessionalStandard::all();
        return ProfessionalStandardResource::collection($data);
    }

    public function create(ProfessionalStandardRequest $request)
    {
        $data = $request->validated();
        $service = new ProfessionalStandardService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(ProfessionalStandardRequest $request, ProfessionalStandard $professionalStandard)
    {
        $data = $request->validated();
        $service = new ProfessionalStandardService();
        $yourModel = $service->update($professionalStandard, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(ProfessionalStandard $professionalStandard)
    {
        $professionalStandard->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
