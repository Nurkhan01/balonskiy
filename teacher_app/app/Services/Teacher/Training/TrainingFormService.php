<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TrainingForm;

class TrainingFormService
{
    public function create($data){
        return TrainingForm::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
