<?php

namespace App\Services\Mobility\Country;

use App\Models\Mobility\Country\CountryType;

class CountryTypeService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return CountryType::create($data);
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
