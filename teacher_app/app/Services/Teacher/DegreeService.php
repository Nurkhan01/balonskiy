<?php

namespace App\Services\Teacher;

use App\Models\Teacher\Degree;

class DegreeService
{
    public function create($data){
        return Degree::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
