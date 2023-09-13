<?php

namespace App\Services\Mobility;

use App\Models\Mobility\AgreementType;

class AgreementTypeService
{
    public function create($data){
        return AgreementType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
