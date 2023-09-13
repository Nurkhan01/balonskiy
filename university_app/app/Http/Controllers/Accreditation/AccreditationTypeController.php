<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationTypeRequest;
use App\Http\Resources\Accreditation\AccreditationTypeResource;
use App\Models\AccreditationType;
use App\Services\Accreditation\AccreditationTypeCreateService;
use App\Services\Accreditation\AccreditationTypeUpdateService;
use Illuminate\Http\Request;

class AccreditationTypeController extends Controller
{
    public function index()
    {
        $data = AccreditationType::all();
        return AccreditationTypeResource::collection($data);
    }

    public function create(AccreditationTypeRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(AccreditationTypeRequest $request, AccreditationType $accreditationType)
    {
        $data = $request->validated();

        $service = new AccreditationTypeUpdateService();
        $yourModel = $service->update($accreditationType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(AccreditationType $accreditationType)
    {

        $accreditationType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
