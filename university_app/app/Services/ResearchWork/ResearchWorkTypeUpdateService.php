<?php

namespace App\Services\ResearchWork;

use App\Models\University;

class ResearchWorkTypeUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $researchWorkType
     * @param $data
     * @return bool
     */
    public function update($researchWorkType, $data){
        if ($researchWorkType) {
            $researchWorkType->update($data);
            return true;
        }
        return false;
    }
}
