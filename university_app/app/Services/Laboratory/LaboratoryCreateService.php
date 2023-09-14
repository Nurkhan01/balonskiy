<?php

namespace App\Services\Laboratory;

use App\Models\Laboratory;

class LaboratoryCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Laboratory::create($data);
    }
}
