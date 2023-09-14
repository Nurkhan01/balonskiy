<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $accreditation
     * @param $data
     * @return bool
     */
    public function update($accreditation, $data){
        if ($accreditation) {
            $accreditation->update($data);
            return true;
        }
        return false;
    }
}
