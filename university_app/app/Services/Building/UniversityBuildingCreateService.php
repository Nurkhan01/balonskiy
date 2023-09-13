<?php

namespace App\Services\Building;

use App\Models\UniversityBuilding;

class UniversityBuildingCreateService
{
    public function create($data){
        return UniversityBuilding::create($data);
    }
}
