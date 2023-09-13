<?php

namespace App\Http\Controllers\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Publication\JournalRequest;
use App\Models\Teacher\Publication\Journal;
use App\Services\Teacher\Publication\JournalService;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Journal::all()]);
    }

    public function create(JournalRequest $request)
    {
        $data = $request->validated();
        $service = new JournalService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(JournalRequest $request, Journal $dataId)
    {
        $data = $request->validated();
        $service = new JournalService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Journal $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
