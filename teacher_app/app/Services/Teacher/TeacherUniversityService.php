<?php

namespace App\Services\Teacher;

use App\Models\Teacher\TeacherUniversity;

class TeacherUniversityService
{
    public function create($data){
        return TeacherUniversity::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
