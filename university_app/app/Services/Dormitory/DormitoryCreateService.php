<?php

namespace App\Services\Dormitory;

use App\Models\Dormitory;

class DormitoryCreateService
{
    public function create($data){
        return Dormitory::create($data);
    }
}
