<?php

namespace App\Services\Student;

use App\Models\Student\Nationality;

class NationalityService
{
    public function create($data){
        return Nationality::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
