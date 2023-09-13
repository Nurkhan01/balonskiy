<?php

namespace App\Services\University;

use App\Models\University;

class ScienceFundingTypeUpdateService
{
    public function update($scienceFundingType, $data){
        if ($scienceFundingType) {
            $scienceFundingType->update($data);
            return true;
        }
        return false;
    }
}
