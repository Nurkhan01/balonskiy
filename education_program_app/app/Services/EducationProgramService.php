<?php

namespace App\Services;

use App\Models\EducationProgram;

class EducationProgramService
{
    /**
     * Создает данные в таблицу education_program
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationProgram::create($data);
    }

    /**
     * Изменяет данные в таблице education_program
     * @param $educationProgram
     * @param $data
     * @return bool
     */
    public function update($educationProgram, $data){
        if ($educationProgram) {
            $educationProgram->update($data);
            return true;
        }
        return false;
    }
}
