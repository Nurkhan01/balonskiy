<?php

namespace App\Services\Teacher;

use App\Models\Teacher\TeacherUniversity;

class TeacherUniversityService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return TeacherUniversity::create($data);
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
