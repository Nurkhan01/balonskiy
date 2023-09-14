<?php

namespace App\Services\Dormitory;

use App\Models\Dormitory;

class DormitoryCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Dormitory::create($data);
    }
}
