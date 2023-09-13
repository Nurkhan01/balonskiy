<?php

namespace App\Services\Student;

use App\Models\Student\StudentLocationType;

class StudentLocationTypeService
{
    public function create($data){
        return StudentLocationType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
