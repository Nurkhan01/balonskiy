<?php

namespace App\Http\Controllers\Student\DevelopingSection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\DevelopingSection\CompetitionWinnerRequest;
use App\Models\Student\DevelopingSection\CompetitionWinner;
use App\Services\Student\DevelopingSection\CompetitionWinnerService;

class CompetitionWinnerController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => CompetitionWinner::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param CompetitionWinnerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CompetitionWinnerRequest $request)
    {
        $data = $request->validated();
        $service = new CompetitionWinnerService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param CompetitionWinnerRequest $request
     * @param CompetitionWinner $competitionWinner
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CompetitionWinnerRequest $request, CompetitionWinner $competitionWinner)
    {
        $data = $request->validated();
        $service = new CompetitionWinnerService();
        $yourModel = $service->update($competitionWinner, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param CompetitionWinner $competitionWinner
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(CompetitionWinner $competitionWinner)
    {
        $competitionWinner->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
