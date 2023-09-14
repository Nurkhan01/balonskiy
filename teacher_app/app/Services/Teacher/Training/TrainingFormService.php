<?php

namespace App\Services\Teacher\Training;

use App\Models\Teacher\Training\TrainingForm;

class TrainingFormService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return TrainingForm::create($data);
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
