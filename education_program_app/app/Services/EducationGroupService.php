<?php

namespace App\Services;

use App\Models\EducationGroup;

class EducationGroupService
{
    /**
     * Создает данные в таблицу education_group
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationGroup::create($data);
    }

    /**
     * Изменяет данные в таблице education_group
     * @param $educationGroup
     * @param $data
     * @return bool
     */
    public function update($educationGroup, $data){
        if ($educationGroup) {
            $educationGroup->update($data);
            return true;
        }
        return false;
    }
}
