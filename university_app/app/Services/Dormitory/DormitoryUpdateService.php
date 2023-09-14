<?php

namespace App\Services\Dormitory;

use App\Models\University;

class DormitoryUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $dormitory
     * @param $data
     * @return bool
     */
    public function update($dormitory, $data){
        if ($dormitory) {
            $dormitory->update($data);
            return true;
        }
        return false;
    }
}
