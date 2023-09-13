<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\PaymentTypeRequest;
use App\Models\Student\PaymentType;
use App\Services\Student\PaymentTypeService;

class PaymentTypeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => PaymentType::all()]);
    }

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

    public function delete(PaymentType $paymentType)
    {
        $paymentType->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
