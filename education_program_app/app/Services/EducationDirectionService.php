<?php

namespace App\Services;

use App\Models\EducationDirection;

class EducationDirectionService
{
    public function create($data){
        return EducationDirection::create($data);
    }
    public function update($educationDirection, $data){
        if ($educationDirection) {
            $educationDirection->update($data);
            return true;
        }
        return false;
    }
}
