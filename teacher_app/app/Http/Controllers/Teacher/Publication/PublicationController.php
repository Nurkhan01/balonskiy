<?php

namespace App\Http\Controllers\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Publication\PublicationRequest;
use App\Models\Teacher\Publication\Publication;
use App\Services\Teacher\Publication\PublicationService;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Publication::all()]);
    }


    public function create(PublicationRequest $request)
    {
        $data = $request->validated();
        $service = new PublicationService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(PublicationRequest $request, Publication $dataId)
    {
        $data = $request->validated();
        $service = new PublicationService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Publication $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
