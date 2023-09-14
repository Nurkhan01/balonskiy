<?php

namespace App\Services;

use App\Models\GosoCycleName;

class GosoCycleNameService
{
    /**
     * Создает данные в таблицу goso_cycle_name
     * @param $data
     * @return mixed
     */
    public function create($data){
        return GosoCycleName::create($data);
    }

    /**
     * Изменяет данные в таблице goso_cycle_name
     * @param $dataId
     * @param $data
     * @return bool
     */
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
