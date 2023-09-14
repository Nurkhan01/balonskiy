<?php

namespace App\Services\University;

use App\Models\City;

class UniversityCityCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return City::create($data);
    }
}
