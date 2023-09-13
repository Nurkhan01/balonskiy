<?php

namespace App\Services\Building;

use App\Models\University;

class UniversityBuildingUpdateService
{
    public function update($universityBuilding, $data){
        if ($universityBuilding) {
            $universityBuilding->update($data);
            return true;
        }
        return false;
    }
}
