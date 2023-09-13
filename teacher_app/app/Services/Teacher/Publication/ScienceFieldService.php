<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\ScienceField;

class ScienceFieldService
{
    public function create($data){
        return ScienceField::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
