<?php

namespace App\Services\Student;

use App\Models\Student\EnrollStatus;

class EnrollStatusService
{
    public function create($data){
        return EnrollStatus::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
