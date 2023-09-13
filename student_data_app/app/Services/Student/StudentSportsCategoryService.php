<?php

namespace App\Services\Student;

use App\Models\Student\StudentSportsCategory;

class StudentSportsCategoryService
{
    public function create($data){
        return StudentSportsCategory::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
