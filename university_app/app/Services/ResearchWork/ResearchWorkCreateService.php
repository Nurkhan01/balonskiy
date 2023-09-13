<?php

namespace App\Services\ResearchWork;

use App\Models\ResearchWork;

class ResearchWorkCreateService
{
    public function create($data){
        return ResearchWork::create($data);
    }
}
