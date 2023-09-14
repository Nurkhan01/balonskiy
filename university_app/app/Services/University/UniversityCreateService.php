<?php

namespace App\Services\University;

use App\Models\University;

class UniversityCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return University::create($data);
    }
}
