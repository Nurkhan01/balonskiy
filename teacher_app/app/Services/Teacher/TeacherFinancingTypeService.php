<?php

namespace App\Services\Teacher;

use App\Models\Teacher\TeacherFinancingType;

class TeacherFinancingTypeService
{
    public function create($data){
        return TeacherFinancingType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}