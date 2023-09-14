<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationRequest;
use App\Http\Resources\Accreditation\AccreditationResource;
use App\Models\Accreditation;
use App\Services\Accreditation\AccreditationCreateService;
use App\Services\Accreditation\AccreditationUpdateService;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Accreditation::all();
        return AccreditationResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param AccreditationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(AccreditationRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param AccreditationRequest $request
     * @param Accreditation $accreditation
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AccreditationRequest $request, Accreditation $accreditation)
    {
        $data = $request->validated();

        $service = new AccreditationUpdateService();
        $yourModel = $service->update($accreditation, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Accreditation $accreditation
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Accreditation $accreditation)
    {
        $accreditation->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
