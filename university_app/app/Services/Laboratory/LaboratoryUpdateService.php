<?php

namespace App\Services\Laboratory;

use App\Models\University;

class LaboratoryUpdateService
{
    public function update($laboratory, $data){
        if ($laboratory) {
            $laboratory->update($data);
            return true;
        }
        return false;
    }
}
