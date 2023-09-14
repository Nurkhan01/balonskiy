<?php

namespace App\Services\ResearchWork;

use App\Models\ResearchWorkType;

class ResearchWorkTypeCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return ResearchWorkType::create($data);
    }
}
