<?php

namespace App\Services;

use App\Models\EducationModule;

class EducationModuleService
{
    public function create($data){
        return EducationModule::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
