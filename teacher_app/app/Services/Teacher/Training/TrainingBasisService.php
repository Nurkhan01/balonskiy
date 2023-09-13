<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TrainingBasis;

class TrainingBasisService
{
    public function create($data){
        return TrainingBasis::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
