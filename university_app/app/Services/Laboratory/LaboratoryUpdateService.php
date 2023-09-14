<?php

namespace App\Services\Laboratory;

use App\Models\University;

class LaboratoryUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $laboratory
     * @param $data
     * @return bool
     */
    public function update($laboratory, $data){
        if ($laboratory) {
            $laboratory->update($data);
            return true;
        }
        return false;
    }
}
