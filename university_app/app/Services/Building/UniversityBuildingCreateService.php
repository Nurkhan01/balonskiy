<?php

namespace App\Services\Building;

use App\Models\UniversityBuilding;

class UniversityBuildingCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return UniversityBuilding::create($data);
    }
}
