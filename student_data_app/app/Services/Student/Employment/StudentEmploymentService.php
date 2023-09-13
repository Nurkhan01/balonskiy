<?php

namespace App\Services\Student\Employment;

use App\Models\Student\Employment\StudentEmployment;

class StudentEmploymentService
{
    public function create($data){
        return StudentEmployment::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
