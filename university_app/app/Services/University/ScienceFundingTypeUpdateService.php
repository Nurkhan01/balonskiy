<?php

namespace App\Services\University;

use App\Models\University;

class ScienceFundingTypeUpdateService
{
    /**
     * Обновляет данные по id по указанной таблице
     * @param $scienceFundingType
     * @param $data
     * @return bool
     */
    public function update($scienceFundingType, $data){
        if ($scienceFundingType) {
            $scienceFundingType->update($data);
            return true;
        }
        return false;
    }
}
