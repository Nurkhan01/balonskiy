<?php

namespace App\Services\SpecialNeedsCondition;

use App\Models\SpecialNeedsCondition;
use App\Models\University;

class SpecialNeedsConditionCreateService
{
    public function create($data){
        return SpecialNeedsCondition::create($data);
    }
}
