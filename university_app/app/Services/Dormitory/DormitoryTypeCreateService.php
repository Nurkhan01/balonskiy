<?php

namespace App\Services\Dormitory;

use App\Models\DormitoryType;

class DormitoryTypeCreateService
{
    public function create($data){
        return DormitoryType::create($data);
    }
}
