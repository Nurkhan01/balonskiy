<?php

namespace App\Services\SpecialNeedsCondition;

use App\Models\SpecialNeedsCondition;

class SpecialNeedsConditionUpdateService
{
    public function update($specialNeedsCondition, $data){
        if ($specialNeedsCondition) {
            $specialNeedsCondition->update($data);
            return true;
        }
        return false;
    }
}
