<?php

namespace App\Services;

use App\Models\FormationEducationProgram;

class FormationEducationProgramService
{
    /**
     * Создает данные в таблицу formation_education_program
     * @param $data
     * @return mixed
     */
    public function create($data){
        return FormationEducationProgram::create($data);
    }

    /**
     * Изменяет данные в таблице formation_education_program
     * @param $dataId
     * @param $data
     * @return bool
     */
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
