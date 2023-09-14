<?php

namespace App\Services\Student;

use App\Models\Student\EnrollStatus;

class EnrollStatusService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return EnrollStatus::create($data);
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
