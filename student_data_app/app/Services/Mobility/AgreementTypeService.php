<?php

namespace App\Services\Mobility;

use App\Models\Mobility\AgreementType;

class AgreementTypeService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return AgreementType::create($data);
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
