<?php

namespace App\Services\Student\Employment;

use App\Models\Student\Employment\Employment;

class EmploymentService
{
    public function create($data){
        return Employment::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
