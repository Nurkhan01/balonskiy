<?php

namespace App\Services\SpecialNeedsCondition;

use App\Models\SpecialNeedsCondition;

class SpecialNeedsConditionUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $specialNeedsCondition
     * @param $data
     * @return bool
     */
    public function update($specialNeedsCondition, $data){
        if ($specialNeedsCondition) {
            $specialNeedsCondition->update($data);
            return true;
        }
        return false;
    }
}
