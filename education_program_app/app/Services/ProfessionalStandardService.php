<?php

namespace App\Services;

use App\Models\ProfessionalStandard;

class ProfessionalStandardService
{
    public function create($data){
        return ProfessionalStandard::create($data);
    }
    public function update($professionalStandard, $data){
        if ($professionalStandard) {
            $professionalStandard->update($data);
            return true;
        }
        return false;
    }
}
