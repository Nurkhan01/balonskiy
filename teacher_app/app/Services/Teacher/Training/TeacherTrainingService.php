<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TeacherTraining;

class TeacherTrainingService
{
    public function create($data){
        return TeacherTraining::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
