<?php

namespace App\Services;

use App\Models\EducationModule;

class EducationModuleService
{
    /**
     * Создает данные в таблицу education_module
     * @param $data
     * @return mixed
     */
    public function create($data){
        return EducationModule::create($data);
    }

    /**
     * Изменяет данные в таблице education_module
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
