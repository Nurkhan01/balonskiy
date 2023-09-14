<?php

namespace App\Services\Dormitory;

class UniversityDormitoryUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $universityDormitory
     * @param $data
     * @return bool
     */
    public function update($universityDormitory, $data){
        if ($universityDormitory) {
            $universityDormitory->update($data);
            return true;
        }
        return false;
    }
}
