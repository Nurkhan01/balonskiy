<?php

namespace App\Services\SportsFacility;

use App\Models\University;

class UniversitySportsFacilityUpdateService
{
    public function update($universitySportsFacility, $data){
        if ($universitySportsFacility) {
            $universitySportsFacility->update($data);
            return true;
        }
        return false;
    }
}
