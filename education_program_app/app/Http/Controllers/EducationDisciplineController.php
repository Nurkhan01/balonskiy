<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationDisciplineRequest;
use App\Http\Resources\EducationDisciplineResource;
use App\Jobs\EducationDisciplineJob;
use App\Models\EducationDiscipline;
use App\Services\EducationDisciplineService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EducationDisciplineController extends Controller
{
    /**
     * Получает все данные из таблицы education_discipline
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = EducationDiscipline::all();
        return EducationDisciplineResource::collection($data);
    }

    /**
     * Создает данные в таблицу education_discipline ссылаясь на сервис EducationDisciplineService
     * @param EducationDisciplineRequest $request
     * @param EducationDisciplineService $service
     * @return JsonResponse
     */
    public function create(EducationDisciplineRequest $request, EducationDisciplineService $service)
    {
        $user = $request->query('user');
        $id = $request->query('id');
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $data = $request->validated();
        $yourModel = $service->create($data);
        if ($yourModel) {
            EducationDisciplineJob::dispatch([
                "user" => $user,
                "id" => $id,
                "text" => "Created new EDUCATION DISCIPLINE",
                "time" => $now
            ]);
            return response()->json(['message' => "Data added successfully"]);

        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице education_discipline ссылаясь на сервис EducationDisciplineService
     * @param EducationDisciplineRequest $request
     * @param EducationDiscipline $dataId
     * @return JsonResponse
     */
    public function update(EducationDisciplineRequest $request, EducationDiscipline $dataId)
    {
        $data = $request->validated();
        $service = new EducationDisciplineService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы education_discipline
     * @param EducationDiscipline $dataId
     * @return JsonResponse
     */
    public function delete(EducationDiscipline $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
