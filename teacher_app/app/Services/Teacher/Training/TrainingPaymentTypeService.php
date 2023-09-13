<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TrainingPaymentType;

class TrainingPaymentTypeService
{
    public function create($data){
        return TrainingPaymentType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
