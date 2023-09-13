<?php

namespace App\Services\Teacher;

use App\Models\Teacher\Citizenship;

class CitizenshipService
{
    public function create($data){
        return Citizenship::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
