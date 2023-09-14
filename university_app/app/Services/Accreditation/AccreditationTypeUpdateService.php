<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationTypeUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $accreditationType
     * @param $data
     * @return bool
     */
    public function update($accreditationType, $data){
        if ($accreditationType) {
            $accreditationType->update($data);
            return true;
        }
        return false;
    }
}
