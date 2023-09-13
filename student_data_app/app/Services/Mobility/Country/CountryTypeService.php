<?php

namespace App\Services\Mobility\Country;

use App\Models\Mobility\Country\CountryType;

class CountryTypeService
{
    public function create($data){
        return CountryType::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
