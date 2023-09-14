<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TeacherTraining;

class TeacherTrainingService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return TeacherTraining::create($data);
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
