<?php

namespace App\Http\Controllers\Mobility\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\Country\CountryTypeRequest;
use App\Models\Mobility\Country\CountryType;
use App\Services\Mobility\Country\CountryTypeService;

class CountryTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => CountryType::all()]);
    }

    public function create(CountryTypeRequest $request)
    {
        $data = $request->validated();
        $service = new CountryTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    public function update(CountryTypeRequest $request, CountryType $countryType)
    {
        $data = $request->validated();
        $service = new CountryTypeService();
        $yourModel = $service->update($countryType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(CountryType $countryType)
    {
        $countryType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
