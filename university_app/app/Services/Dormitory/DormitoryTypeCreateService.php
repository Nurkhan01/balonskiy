<?php

namespace App\Services\Dormitory;

use App\Models\DormitoryType;

class DormitoryTypeCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return DormitoryType::create($data);
    }
}
