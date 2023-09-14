<?php

namespace App\Http\Controllers\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Publication\ScienceFieldRequest;
use App\Models\Teacher\Publication\ScienceField;
use App\Services\Teacher\Publication\ScienceFieldService;
use Illuminate\Http\Request;

class ScienceFieldController extends Controller
{
    /**
     * Отображает список данных
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => ScienceField::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param ScienceFieldRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ScienceFieldRequest $request)
    {
        $data = $request->validated();
        $service = new ScienceFieldService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param ScienceFieldRequest $request
     * @param ScienceField $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ScienceFieldRequest $request, ScienceField $dataId)
    {
        $data = $request->validated();
        $service = new ScienceFieldService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param ScienceField $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(ScienceField $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
