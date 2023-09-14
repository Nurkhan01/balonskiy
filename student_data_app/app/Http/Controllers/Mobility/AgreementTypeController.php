<?php

namespace App\Http\Controllers\Mobility;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mobility\AgreementTypeRequest;
use App\Models\Mobility\AgreementType;
use App\Services\Mobility\AgreementTypeService;

class AgreementTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => AgreementType::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param AgreementTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(AgreementTypeRequest $request)
    {
        $data = $request->validated();
        $service = new AgreementTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param AgreementTypeRequest $request
     * @param AgreementType $agreementType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AgreementTypeRequest $request, AgreementType $agreementType)
    {
        $data = $request->validated();
        $service = new AgreementTypeService();
        $yourModel = $service->update($agreementType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param AgreementType $agreementType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(AgreementType $agreementType)
    {
        $agreementType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
