<?php

namespace App\Services;

use App\Models\EducationProgramAccreditation;

class EducationProgramAccreditationService
{
    /**
     * Создает данные в таблицу education_program_accreditation
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationProgramAccreditation::create($data);
    }

    /**
     * Изменяет данные в таблице education_program_accreditation
     * @param $educationProgramAccreditation
     * @param $data
     * @return bool
     */
    public function update($educationProgramAccreditation, $data){
        if ($educationProgramAccreditation) {
            $educationProgramAccreditation->update($data);
            return true;
        }
        return false;
    }
}
