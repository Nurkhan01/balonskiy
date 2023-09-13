<?php

namespace App\Services;

use App\Models\FormationEducationProgram;

class FormationEducationProgramService
{
    public function create($data){
        return FormationEducationProgram::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
