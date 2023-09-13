<?php

namespace App\Services\Dormitory;

use App\Models\University;

class DormitoryUpdateService
{
    public function update($dormitory, $data){
        if ($dormitory) {
            $dormitory->update($data);
            return true;
        }
        return false;
    }
}
