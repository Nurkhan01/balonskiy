<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\CountryRequest;
use App\Models\Teacher\Country;
use App\Services\Teacher\CountryService;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Country::all()]);
    }

    public function create(CountryRequest $request)
    {
        $data = $request->validated();

        $service = new CountryService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }


    public function update(CountryRequest $request, Country $dataId)
    {
        $data = $request->validated();

        $service = new CountryService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    public function delete(Country $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
