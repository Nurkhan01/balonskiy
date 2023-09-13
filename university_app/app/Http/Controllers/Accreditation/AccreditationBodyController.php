<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationBodyRequest;
use App\Http\Resources\Accreditation\AccreditationBodyResource;
use App\Models\AccreditationBody;
use App\Services\Accreditation\AccreditationBodyCreateService;
use App\Services\Accreditation\AccreditationBodyUpdateService;
use Illuminate\Http\Request;

class AccreditationBodyController extends Controller
{
    public function index()
    {
        $data = AccreditationBody::all();
        return AccreditationBodyResource::collection($data);
    }

    public function create(AccreditationBodyRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationBodyCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(AccreditationBodyRequest $request, AccreditationBody $accreditationBody)
    {
        $data = $request->validated();

        $service = new AccreditationBodyUpdateService();
        $yourModel = $service->update($accreditationBody, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(AccreditationBody $accreditationBody)
    {
        $accreditationBody->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
