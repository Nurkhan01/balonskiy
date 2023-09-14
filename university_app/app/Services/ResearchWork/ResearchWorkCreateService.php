<?php

namespace App\Services\ResearchWork;

use App\Models\ResearchWork;

class ResearchWorkCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return ResearchWork::create($data);
    }
}
