<?php

namespace App\Services;

use App\Models\JointEducationProgram;

class JointEducationProgramService
{
    /**
     * Создает данные в таблицу joint_education_program
     * @param $data
     * @return mixed
     */
    public function create($data){
        return JointEducationProgram::create($data);
    }

    /**
     * Изменяет данные в таблице joint_education_program
     * @param $jointEducationProgram
     * @param $data
     * @return bool
     */
    public function update($jointEducationProgram, $data){
        if ($jointEducationProgram) {
            $jointEducationProgram->update($data);
            return true;
        }
        return false;
    }
}
