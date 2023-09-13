<?php

namespace App\Services\Dormitory;

class UniversityDormitoryUpdateService
{
    public function update($universityDormitory, $data){
        if ($universityDormitory) {
            $universityDormitory->update($data);
            return true;
        }
        return false;
    }
}
