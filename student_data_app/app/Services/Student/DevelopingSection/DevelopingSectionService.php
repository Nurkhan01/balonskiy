<?php

namespace App\Services\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\DevelopingSection;

class DevelopingSectionService
{
    public function create($data){
        return DevelopingSection::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
