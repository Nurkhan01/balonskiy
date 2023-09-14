<?php

namespace App\Services\Building;
class BuildingUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $building
     * @param $data
     * @return bool
     */
    public function update($building, $data){
        if ($building) {
            $building->update($data);
            return true;
        }
        return false;
    }
}
