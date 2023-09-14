<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationBody;

class AccreditationBodyCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return AccreditationBody::create($data);
    }
}
