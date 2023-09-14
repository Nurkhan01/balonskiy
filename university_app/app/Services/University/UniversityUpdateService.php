<?php

namespace App\Services\University;

use App\Models\University;

class UniversityUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $university
     * @param $data
     * @return bool
     */
    public function update($university, $data){
        if ($university) {
            $university->update($data);
            return true;
        }
        return false;
    }
}
