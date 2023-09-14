<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accreditation\AccreditationBodyTypeRequest;
use App\Http\Resources\Accreditation\AccreditationBodyTypeResource;
use App\Models\AccreditationBodyType;
use App\Services\Accreditation\AccreditationBodyTypeCreateService;
use App\Services\Accreditation\AccreditationBodyTypeUpdateService;
use Illuminate\Http\Request;

class AccreditationBodyTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = AccreditationBodyType::all();
        return AccreditationBodyTypeResource::collection($data);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param AccreditationBodyTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(AccreditationBodyTypeRequest $request)
    {
        $data = $request->validated();

        $service = new AccreditationBodyTypeCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param AccreditationBodyTypeRequest $request
     * @param AccreditationBodyType $accreditationBodyType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AccreditationBodyTypeRequest $request, AccreditationBodyType $accreditationBodyType)
    {
        $data = $request->validated();

        $service = new AccreditationBodyTypeUpdateService();
        $yourModel = $service->update($accreditationBodyType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param AccreditationBodyType $accreditationBodyType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(AccreditationBodyType $accreditationBodyType)
    {
        $accreditationBodyType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
