<?php

namespace App\Services\Accreditation;

use App\Models\Accreditation;

class AccreditationCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Accreditation::create($data);
    }
}
