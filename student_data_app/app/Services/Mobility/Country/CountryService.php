<?php

namespace App\Services\Mobility\Country;

use App\Models\Mobility\Country\Country;

class CountryService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return Country::create($data);
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
