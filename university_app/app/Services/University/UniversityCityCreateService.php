<?php

namespace App\Services\University;

use App\Models\City;

class UniversityCityCreateService
{
    public function create($data){
        return City::create($data);
    }
}
