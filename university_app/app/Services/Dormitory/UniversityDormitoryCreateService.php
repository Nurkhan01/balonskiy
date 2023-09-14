<?php

namespace App\Services\Dormitory;

use App\Models\UniversityDormitory;

class UniversityDormitoryCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return UniversityDormitory::create($data);
    }
}
