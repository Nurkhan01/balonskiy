<?php

namespace App\Services\Student;

use App\Models\Student\Nationality;

class NationalityService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return Nationality::create($data);
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
