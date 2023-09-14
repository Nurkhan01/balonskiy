<?php

namespace App\Services\Student\Employment;

use App\Models\Student\Employment\StudentEmployment;

class StudentEmploymentService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return StudentEmployment::create($data);
    }
    // Обновляет данные по $dataId по указанной таблице
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
