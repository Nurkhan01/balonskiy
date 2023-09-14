<?php

namespace App\Services\Laboratory;

use App\Models\University;

class UniversityLaboratoryUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $universityLaboratory
     * @param $data
     * @return bool
     */
    public function update($universityLaboratory, $data){
        if ($universityLaboratory) {
            $universityLaboratory->update($data);
            return true;
        }
        return false;
    }
}
