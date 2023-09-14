<?php

namespace App\Services;

use App\Models\EducationDiscipline;

class EducationDisciplineService
{
    /**
     * Создает данные в таблицу education_discipline
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationDiscipline::create($data);
    }

    /**
     * Изменяет данные в таблице education_discipline
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
