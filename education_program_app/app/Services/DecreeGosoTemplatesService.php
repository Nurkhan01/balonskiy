<?php

namespace App\Services;

use App\Models\DecreeGosoTemplates;

class DecreeGosoTemplatesService
{
    /**
     * Создает данные в таблицу decree_goso_templates
     * @param $data
     * @return mixed
     */
    public function create($data){
        return DecreeGosoTemplates::create($data);
    }

    /**
     * Изменяет данные в таблице decree_goso_templates
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
