<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\PaymentTypeRequest;
use App\Models\Student\PaymentType;
use App\Services\Student\PaymentTypeService;

class PaymentTypeController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['data' => PaymentType::all()]);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param PaymentTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(PaymentTypeRequest $request)
    {
        $data = $request->validated();
        $service = new PaymentTypeService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }

    /**
     * Изменяет запись в базе данных обратившись в сервис
     * @param PaymentTypeRequest $request
     * @param PaymentType $paymentType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PaymentTypeRequest $request, PaymentType $paymentType)
    {
        $data = $request->validated();
        $service = new PaymentTypeService();
        $yourModel = $service->update($paymentType, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param PaymentType $paymentType
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(PaymentType $paymentType)
    {
        $paymentType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
