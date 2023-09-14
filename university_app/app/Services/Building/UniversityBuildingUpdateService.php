<?php

namespace App\Services\Building;

use App\Models\University;

class UniversityBuildingUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $universityBuilding
     * @param $data
     * @return bool
     */
    public function update($universityBuilding, $data){
        if ($universityBuilding) {
            $universityBuilding->update($data);
            return true;
        }
        return false;
    }
}
