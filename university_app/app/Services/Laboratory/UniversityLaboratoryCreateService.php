<?php

namespace App\Services\Laboratory;

use App\Models\UniversityLaboratory;

class UniversityLaboratoryCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return UniversityLaboratory::create($data);
    }
}
