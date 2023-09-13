<?php

namespace App\Services;

use App\Models\JointEducationProgram;

class JointEducationProgramService
{
    public function create($data){
        return JointEducationProgram::create($data);
    }
    public function update($jointEducationProgram, $data){
        if ($jointEducationProgram) {
            $jointEducationProgram->update($data);
            return true;
        }
        return false;
    }
}
