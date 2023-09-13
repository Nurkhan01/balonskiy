<?php

namespace App\Services\Building;
class BuildingUpdateService
{
    public function update($building, $data){
        if ($building) {
            $building->update($data);
            return true;
        }
        return false;
    }
}
