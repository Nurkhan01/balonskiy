<?php

namespace App\Services\Student;

use App\Models\Student\DisabilityCategory;

class DisabilityCategoryService
{
    public function create($data){
        return DisabilityCategory::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
