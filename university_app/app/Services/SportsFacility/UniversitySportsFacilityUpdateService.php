<?php

namespace App\Services\SportsFacility;

use App\Models\University;

class UniversitySportsFacilityUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $universitySportsFacility
     * @param $data
     * @return bool
     */
    public function update($universitySportsFacility, $data){
        if ($universitySportsFacility) {
            $universitySportsFacility->update($data);
            return true;
        }
        return false;
    }
}
