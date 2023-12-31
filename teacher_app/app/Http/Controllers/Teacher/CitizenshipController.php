<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\CitizenshipRequest;
use App\Models\Teacher\Citizenship;
use App\Services\Teacher\CitizenshipService;
use Illuminate\Http\Request;

class CitizenshipController extends Controller
{
    /**
     * Отображает список гражданств.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Citizenship::all()]);
    }

    /**
     * Сохраняет новое гражданство в хранилище.
     *
     * @param  CitizenshipRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CitizenshipRequest $request)
    {
        $data = $request->validated();

        $service = new CitizenshipService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет указанное гражданство в хранилище.
     *
     * @param  CitizenshipRequest  $request
     * @param  Citizenship  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CitizenshipRequest $request, Citizenship $dataId)
    {
        $data = $request->validated();

        $service = new CitizenshipService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанное гражданство из хранилища.
     *
     * @param  Citizenship  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Citizenship $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
