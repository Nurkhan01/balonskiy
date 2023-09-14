<?php

namespace App\Services;

use App\Models\CreditTimeType;

class CreditTimeTypeService
{
    /**
     * Создает данные в таблицу credit_time_type
     * @param $data
     * @return mixed
     */
    public function create($data){
        return CreditTimeType::create($data);
    }

    /**
     * Изменяет данные в таблице credit_time_type
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
