<?php

namespace App\Services;

use App\Models\EducationDiscipline;

class EducationDisciplineService
{
    public function create($data){
        return EducationDiscipline::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
