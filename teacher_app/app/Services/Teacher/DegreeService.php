<?php

namespace App\Services\Teacher;

use App\Models\Teacher\Degree;

class DegreeService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return Degree::create($data);
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
