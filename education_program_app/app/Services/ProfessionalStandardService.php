<?php

namespace App\Services;

use App\Models\ProfessionalStandard;

class ProfessionalStandardService
{
    /**
     * Создает данные в таблицу professional_standard
     * @param $data
     * @return mixed
     */
    public function create($data){
        return ProfessionalStandard::create($data);
    }

    /**
     * Изменяет данные в таблице professional_standard
     * @param $professionalStandard
     * @param $data
     * @return bool
     */
    public function update($professionalStandard, $data){
        if ($professionalStandard) {
            $professionalStandard->update($data);
            return true;
        }
        return false;
    }
}
