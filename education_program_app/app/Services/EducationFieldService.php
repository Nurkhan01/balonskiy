<?php

namespace App\Services;

use App\Models\EducationField;

class EducationFieldService
{
    /**
     * Создает данные в таблицу education_field
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationField::create($data);
    }

    /**
     * Изменяет данные в таблице education_field
     * @param $educationField
     * @param $data
     * @return bool
     */
    public function update($educationField, $data){
        if ($educationField) {
            $educationField->update($data);
            return true;
        }
        return false;
    }
}
