<?php

namespace App\Services\ResearchWork;

use App\Models\ResearchWorkType;

class ResearchWorkTypeCreateService
{
    public function create($data){
        return ResearchWorkType::create($data);
    }
}
