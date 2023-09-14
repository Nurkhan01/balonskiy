<?php

namespace App\Services\Student;

use App\Models\Student\StudentDisability;

class StudentDisabilityService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return StudentDisability::create($data);
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
