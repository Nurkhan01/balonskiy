<?php

namespace App\Services\ResearchWork;

use App\Models\University;

class ResearchWorkUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $researchWork
     * @param $data
     * @return bool
     */
    public function update($researchWork, $data){
        if ($researchWork) {
            $researchWork->update($data);
            return true;
        }
        return false;
    }
}
