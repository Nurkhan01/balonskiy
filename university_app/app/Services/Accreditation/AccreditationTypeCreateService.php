<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationType;

class AccreditationTypeCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return AccreditationType::create($data);
    }
}
