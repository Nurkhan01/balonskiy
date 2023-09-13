<?php

namespace App\Services\Teacher;

use App\Models\Teacher\ForeignTeacher;

class ForeignTeacherService
{
    public function create($data){
        return ForeignTeacher::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
