<?php

namespace App\Services;

use App\Models\EducationGroup;

class EducationGroupService
{
    public function create($data){
        return EducationGroup::create($data);
    }
    public function update($educationGroup, $data){
        if ($educationGroup) {
            $educationGroup->update($data);
            return true;
        }
        return false;
    }
}
