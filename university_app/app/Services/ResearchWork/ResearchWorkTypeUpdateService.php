<?php

namespace App\Services\ResearchWork;

use App\Models\University;

class ResearchWorkTypeUpdateService
{
    public function update($researchWorkType, $data){
        if ($researchWorkType) {
            $researchWorkType->update($data);
            return true;
        }
        return false;
    }
}
