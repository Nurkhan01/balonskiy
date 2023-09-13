<?php

namespace App\Services;

use App\Models\EducationProgramAccreditation;

class EducationProgramAccreditationService
{
    public function create($data){
        return EducationProgramAccreditation::create($data);
    }
    public function update($educationProgramAccreditation, $data){
        if ($educationProgramAccreditation) {
            $educationProgramAccreditation->update($data);
            return true;
        }
        return false;
    }
}
