<?php

namespace App\Services;

use App\Models\CreditTimeType;

class CreditTimeTypeService
{
    public function create($data){
        return CreditTimeType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
