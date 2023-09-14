<?php

namespace App\Services\SportsFacility;

use App\Models\University;

class SportsFacilityUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $sportsFacility
     * @param $data
     * @return bool
     */
    public function update($sportsFacility, $data){
        if ($sportsFacility) {
            $sportsFacility->update($data);
            return true;
        }
        return false;
    }
}
