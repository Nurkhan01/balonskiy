<?php

namespace App\Services\Mobility\Country;

use App\Models\Mobility\Country\Country;

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
