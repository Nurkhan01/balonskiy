<?php

namespace App\Services\Laboratory;

use App\Models\Laboratory;

class LaboratoryCreateService
{
    public function create($data){
        return Laboratory::create($data);
    }
}
