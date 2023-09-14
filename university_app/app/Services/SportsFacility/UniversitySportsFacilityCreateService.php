<?php

namespace App\Services\SportsFacility;
use App\Models\UniversitySportsFacility;

class UniversitySportsFacilityCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return UniversitySportsFacility::create($data);
    }
}
