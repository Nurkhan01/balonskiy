<?php

namespace App\Services\Student;

use App\Models\Student\EmploymentStatus;

class EmploymentStatusService
{
    public function create($data){
        return EmploymentStatus::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
