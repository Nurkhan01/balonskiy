<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationBodyTypeRequest;
use App\Http\Resources\Accreditation\AccreditationBodyTypeResource;
use App\Models\AccreditationBodyType;
use App\Services\Accreditation\AccreditationBodyTypeCreateService;
use App\Services\Accreditation\AccreditationBodyTypeUpdateService;
use Illuminate\Http\Request;

class AccreditationBodyTypeController extends Controller
{
    public function index()
    {
        $data = AccreditationBodyType::all();
        return AccreditationBodyTypeResource::collection($data);
    }

    public function create(AccreditationBodyTypeRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationBodyTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(AccreditationBodyTypeRequest $request, AccreditationBodyType $accreditationBodyType)
    {
        $data = $request->validated();

        $service = new AccreditationBodyTypeUpdateService();
        $yourModel = $service->update($accreditationBodyType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(AccreditationBodyType $accreditationBodyType)
    {
        $accreditationBodyType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
