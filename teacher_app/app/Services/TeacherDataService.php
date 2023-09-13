<?php

namespace App\Services;

use App\Models\TeacherData;

class TeacherDataService
{
    public function create($data){
        return TeacherData::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
