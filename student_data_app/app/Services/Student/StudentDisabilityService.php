<?php

namespace App\Services\Student;

use App\Models\Student\StudentDisability;

class StudentDisabilityService
{
    public function create($data){
        return StudentDisability::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
