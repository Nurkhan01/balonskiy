<?php

namespace App\Services\SportsFacility;

use App\Models\SportsFacility;

class SportsFacilityCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return SportsFacility::create($data);
    }
}
