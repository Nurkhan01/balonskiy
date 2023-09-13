<?php

namespace App\Services\Student;

use App\Models\Student\PaymentType;

class PaymentTypeService
{
    public function create($data){
        return PaymentType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
