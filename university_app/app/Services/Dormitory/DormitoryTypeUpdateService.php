<?php

namespace App\Services\Dormitory;

use App\Models\University;

class DormitoryTypeUpdateService
{
    public function update($dormitoryType, $data){
        if ($dormitoryType) {
            $dormitoryType->update($data);
            return true;
        }
        return false;
    }
}
