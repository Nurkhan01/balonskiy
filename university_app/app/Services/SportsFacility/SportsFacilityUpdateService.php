<?php

namespace App\Services\SportsFacility;

use App\Models\University;

class SportsFacilityUpdateService
{
    public function update($sportsFacility, $data){
        if ($sportsFacility) {
            $sportsFacility->update($data);
            return true;
        }
        return false;
    }
}
