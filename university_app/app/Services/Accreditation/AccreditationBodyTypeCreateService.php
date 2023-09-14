<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationBodyType;

class AccreditationBodyTypeCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return AccreditationBodyType::create($data);
    }
}
