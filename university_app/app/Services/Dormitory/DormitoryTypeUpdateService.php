<?php

namespace App\Services\Dormitory;

use App\Models\University;

class DormitoryTypeUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $dormitoryType
     * @param $data
     * @return bool
     */
    public function update($dormitoryType, $data){
        if ($dormitoryType) {
            $dormitoryType->update($data);
            return true;
        }
        return false;
    }
}
