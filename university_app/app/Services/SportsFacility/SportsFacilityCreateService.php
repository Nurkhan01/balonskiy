<?php

namespace App\Services\SportsFacility;

use App\Models\SportsFacility;

class SportsFacilityCreateService
{
    public function create($data){
        return SportsFacility::create($data);
    }
}
