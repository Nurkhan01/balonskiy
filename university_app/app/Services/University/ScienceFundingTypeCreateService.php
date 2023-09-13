<?php

namespace App\Services\University;

use App\Models\ScienceFundingType;

class ScienceFundingTypeCreateService
{
    public function create($data){
        return ScienceFundingType::create($data);
    }
}
