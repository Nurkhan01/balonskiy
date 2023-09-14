<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\TeacherPublication;

class TeacherPublicationService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return TeacherPublication::create($data);
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
