<?php

namespace App\Http\Controllers\Mobility\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\Country\CountryRequest;
use App\Models\Mobility\Country\Country;
use App\Services\Mobility\Country\CountryService;

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


    public function update(CountryRequest $request, Country $country)
    {
        $data = $request->validated();
        $service = new CountryService();
        $yourModel = $service->update($country, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(Country $country)
    {
        $country->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
