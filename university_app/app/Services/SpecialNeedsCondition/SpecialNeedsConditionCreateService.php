<?php

namespace App\Services\SpecialNeedsCondition;

use App\Models\SpecialNeedsCondition;
use App\Models\University;

class SpecialNeedsConditionCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return SpecialNeedsCondition::create($data);
    }
}
