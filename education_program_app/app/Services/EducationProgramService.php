<?php

namespace App\Services;

use App\Models\EducationProgram;

class EducationProgramService
{
    public function create($data){
        return EducationProgram::create($data);
    }
    public function update($educationProgram, $data){
        if ($educationProgram) {
            $educationProgram->update($data);
            return true;
        }
        return false;
    }
}
