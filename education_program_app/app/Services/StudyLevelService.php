<?php

namespace App\Services;

use App\Models\StudyLevel;

class StudyLevelService
{
    public function create($data){
        return StudyLevel::create($data);
    }
    public function update($studyLevel, $data){
        if ($studyLevel) {
            $studyLevel->update($data);
            return true;
        }
        return false;
    }
}
