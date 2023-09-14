<?php

namespace App\Services;

use App\Models\JointEpFinancingSource;

class JointEpFinancingSourceService
{
    /**
     * Создает данные в таблицу joint_ep_financing_source
     * @param $data
     * @return mixed
     */
    public function create($data){
        return JointEpFinancingSource::create($data);
    }

    /**
     * Изменяет данные в таблице joint_ep_financing_source
     * @param $jointEpFinancingSource
     * @param $data
     * @return bool
     */
    public function update($jointEpFinancingSource, $data){
        if ($jointEpFinancingSource) {
            $jointEpFinancingSource->update($data);
            return true;
        }
        return false;
    }
}
