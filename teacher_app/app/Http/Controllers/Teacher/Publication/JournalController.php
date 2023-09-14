<?php

namespace App\Http\Controllers\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Publication\JournalRequest;
use App\Models\Teacher\Publication\Journal;
use App\Services\Teacher\Publication\JournalService;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => Journal::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param JournalRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param JournalRequest $request
     * @param Journal $dataId
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Journal $dataId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Journal $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
