<?php

namespace App\Services\Dormitory;

use App\Models\UniversityDormitory;

class UniversityDormitoryCreateService
{
    public function create($data){
        return UniversityDormitory::create($data);
    }
}
