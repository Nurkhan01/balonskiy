<?php

namespace App\Services;

use App\Models\EducationDirection;

class EducationDirectionService
{
    /**
     * Создает данные в таблицу education_direction
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationDirection::create($data);
    }

    /**
     * Изменяет данные в таблице education_direction
     * @param $educationDirection
     * @param $data
     * @return bool
     */
    public function update($educationDirection, $data){
        if ($educationDirection) {
            $educationDirection->update($data);
            return true;
        }
        return false;
    }
}
