<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationBodyUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $accreditationBody
     * @param $data
     * @return bool
     */
    public function update($accreditationBody, $data){
        if ($accreditationBody) {
            $accreditationBody->update($data);
            return true;
        }
        return false;
    }
}
