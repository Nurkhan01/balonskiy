<?php

namespace App\Http\Controllers\Mobility\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\Country\CountryRequest;
use App\Models\Mobility\Country\Country;
use App\Services\Mobility\Country\CountryService;

class CountryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Country::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param CountryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param CountryRequest $request
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     */

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

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Country $country)
    {
        $country->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
