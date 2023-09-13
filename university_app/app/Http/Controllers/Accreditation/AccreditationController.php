<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationRequest;
use App\Http\Resources\Accreditation\AccreditationResource;
use App\Models\Accreditation;
use App\Services\Accreditation\AccreditationCreateService;
use App\Services\Accreditation\AccreditationUpdateService;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    public function index()
    {
        $data = Accreditation::all();
        return AccreditationResource::collection($data);
    }

    public function create(AccreditationRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(AccreditationRequest $request, Accreditation $accreditation)
    {
        $data = $request->validated();

        $service = new AccreditationUpdateService();
        $yourModel = $service->update($accreditation, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(Accreditation $accreditation)
    {

        $accreditation->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
