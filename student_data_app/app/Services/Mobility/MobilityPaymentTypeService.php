<?php

namespace App\Services\Mobility;

use App\Models\Mobility\MobilityPaymentType;

class MobilityPaymentTypeService
{
    public function create($data){
        return MobilityPaymentType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
