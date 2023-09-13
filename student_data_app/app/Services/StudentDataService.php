<?php

namespace App\Services;

use App\Models\StudentData;

class StudentDataService
{
    public function create($data){
        return StudentData::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
