<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use App\Services\LanguageService;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $data = Language::all();
        return LanguageResource::collection($data);
    }

    public function create(LanguageRequest $request)
    {
        $data = $request->validated();
        $service = new LanguageService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    public function update(LanguageRequest $request, Language $language)
    {
        $data = $request->validated();
        $service = new LanguageService();
        $yourModel = $service->update($language, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Language $language)
    {
        $language->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
