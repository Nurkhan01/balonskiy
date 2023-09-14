<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationBodyTypeUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $accreditationBodyType
     * @param $data
     * @return bool
     */
    public function update($accreditationBodyType, $data){
        if ($accreditationBodyType) {
            $accreditationBodyType->update($data);
            return true;
        }
        return false;
    }
}
