<?php

namespace App\Services\ResearchWork;

use App\Models\University;

class ResearchWorkUpdateService
{
    public function update($researchWork, $data){
        if ($researchWork) {
            $researchWork->update($data);
            return true;
        }
        return false;
    }
}
