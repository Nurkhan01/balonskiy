<?php

namespace App\Services\Mobility;

use App\Models\Mobility\MobilityType;

class MobilityTypeService
{
    public function create($data){
        return MobilityType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
