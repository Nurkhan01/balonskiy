<?php

namespace App\Services\Teacher;

use App\Models\Teacher\Country;

class CountryService
{
    public function create($data){
        return Country::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
