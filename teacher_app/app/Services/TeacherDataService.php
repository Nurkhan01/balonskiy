<?php

namespace App\Services;

use App\Models\TeacherData;

class TeacherDataService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return TeacherData::create($data);
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
