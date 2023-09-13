<?php

namespace App\Services\Laboratory;

use App\Models\University;

class UniversityLaboratoryUpdateService
{
    public function update($universityLaboratory, $data){
        if ($universityLaboratory) {
            $universityLaboratory->update($data);
            return true;
        }
        return false;
    }
}
