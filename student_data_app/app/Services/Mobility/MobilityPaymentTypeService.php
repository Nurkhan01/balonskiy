<?php

namespace App\Services\Mobility;

use App\Models\Mobility\MobilityPaymentType;

class MobilityPaymentTypeService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return MobilityPaymentType::create($data);
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
