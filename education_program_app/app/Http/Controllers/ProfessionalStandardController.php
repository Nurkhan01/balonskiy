<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalStandardRequest;
use App\Http\Resources\ProfessionalStandardResource;
use App\Models\ProfessionalStandard;
use App\Services\ProfessionalStandardService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProfessionalStandardController extends Controller
{
    /**
     * Получает все данные из таблицы professional_standard
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = ProfessionalStandard::all();
        return ProfessionalStandardResource::collection($data);
    }

    /**
     * Создает данные в таблицу professional_standard ссылаясь на сервис ProfessionalStandardService
     * @param ProfessionalStandardRequest $request
     * @return JsonResponse
     */
    public function create(ProfessionalStandardRequest $request)
    {
        $data = $request->validated();
        $service = new ProfessionalStandardService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице professional_standard ссылаясь на сервис ProfessionalStandardService
     * @param ProfessionalStandardRequest $request
     * @param ProfessionalStandard $professionalStandard
     * @return JsonResponse
     */
    public function update(ProfessionalStandardRequest $request, ProfessionalStandard $professionalStandard)
    {
        $data = $request->validated();
        $service = new ProfessionalStandardService();
        $yourModel = $service->update($professionalStandard, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы professional_standard
     * @param ProfessionalStandard $professionalStandard
     * @return JsonResponse
     */
    public function delete(ProfessionalStandard $professionalStandard)
    {
        $professionalStandard->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
