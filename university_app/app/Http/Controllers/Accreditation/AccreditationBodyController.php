<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationBodyRequest;
use App\Http\Resources\Accreditation\AccreditationBodyResource;
use App\Models\AccreditationBody;
use App\Services\Accreditation\AccreditationBodyCreateService;
use App\Services\Accreditation\AccreditationBodyUpdateService;
use Illuminate\Http\Request;

class AccreditationBodyController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = AccreditationBody::all();
        return AccreditationBodyResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param AccreditationBodyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(AccreditationBodyRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationBodyCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param AccreditationBodyRequest $request
     * @param AccreditationBody $accreditationBody
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AccreditationBodyRequest $request, AccreditationBody $accreditationBody)
    {
        $data = $request->validated();

        $service = new AccreditationBodyUpdateService();
        $yourModel = $service->update($accreditationBody, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param AccreditationBody $accreditationBody
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(AccreditationBody $accreditationBody)
    {
        $accreditationBody->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
