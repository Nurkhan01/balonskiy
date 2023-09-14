<?php

namespace App\Services;

use App\Models\GosoComponentName;

class GosoComponentNameService
{
    /**
     * Создает данные в таблицу goso_component_name
     * @param $data
     * @return mixed
     */
    public function create($data){
        return GosoComponentName::create($data);
    }

    /**
     * Изменяет данные в таблице goso_component_name
     * @param $dataId
     * @param $data
     * @return bool
     */
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
