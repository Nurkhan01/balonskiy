<?php

namespace App\Services\SportsFacility;
use App\Models\UniversitySportsFacility;

class UniversitySportsFacilityCreateService
{
    public function create($data){
        return UniversitySportsFacility::create($data);
    }
}
