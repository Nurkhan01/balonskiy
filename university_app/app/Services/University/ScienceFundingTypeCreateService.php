<?php

namespace App\Services\University;

use App\Models\ScienceFundingType;

class ScienceFundingTypeCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return ScienceFundingType::create($data);
    }
}
