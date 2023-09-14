<?php

namespace App\Services;

use App\Models\StudyLevel;

class StudyLevelService
{
    /**
     * Создает данные в таблицу study_level
     * @param $data
     * @return mixed
     */
    public function create($data){
        return StudyLevel::create($data);
    }

    /**
     * Изменяет данные в таблице study_level
     * @param $studyLevel
     * @param $data
     * @return bool
     */
    public function update($studyLevel, $data){
        if ($studyLevel) {
            $studyLevel->update($data);
            return true;
        }
        return false;
    }
}
