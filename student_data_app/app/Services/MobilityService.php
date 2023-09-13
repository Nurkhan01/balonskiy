<?php

namespace App\Services;

use App\Models\Mobility;

class MobilityService
{
    public function create($data){
        return Mobility::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
