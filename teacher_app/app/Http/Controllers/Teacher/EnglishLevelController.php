<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\EnglishLevelRequest;
use App\Models\Teacher\EnglishLevel;
use App\Services\Teacher\EnglishLevelService;

class EnglishLevelController extends Controller
{
    /**
     * Отображает список уровней английского языка преподавателя.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => EnglishLevel::all()]);
    }

    /**
     * Сохраняет новый уровень английского языка преподавателя в хранилище.
     *
     * @param  EnglishLevelRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(EnglishLevelRequest $request)
    {
        $data = $request->validated();

        $service = new EnglishLevelService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет указанный уровень английского языка преподавателя в хранилище.
     *
     * @param  EnglishLevelRequest  $request
     * @param  EnglishLevel  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EnglishLevelRequest $request, EnglishLevel $dataId)
    {
        $data = $request->validated();

        $service = new EnglishLevelService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанный уровень английского языка преподавателя из хранилища.
     *
     * @param  EnglishLevel  $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(EnglishLevel $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
