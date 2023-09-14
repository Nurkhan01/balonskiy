<?php

namespace App\Services\University;

use App\Models\University;

class UniversityCityUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $universityCity
     * @param $data
     * @return bool
     */
    public function update($universityCity, $data){
        if ($universityCity) {
            $universityCity->update($data);
            return true;
        }
        return false;
    }
}
