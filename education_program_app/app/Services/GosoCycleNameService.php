<?php

namespace App\Services;

use App\Models\GosoCycleName;

class GosoCycleNameService
{
    public function create($data){
        return GosoCycleName::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
