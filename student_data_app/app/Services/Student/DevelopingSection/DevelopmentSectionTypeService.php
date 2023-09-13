<?php

namespace App\Services\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\DevelopmentSectionType;

class DevelopmentSectionTypeService
{
    public function create($data){
        return DevelopmentSectionType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
