<?php

namespace App\Services\Building;

use App\Models\Building;

class BuildingCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Building::create($data);
    }
}
