<?php

namespace App\Services\Building;

use App\Models\Building;

class BuildingCreateService
{
    public function create($data){
        return Building::create($data);
    }
}
