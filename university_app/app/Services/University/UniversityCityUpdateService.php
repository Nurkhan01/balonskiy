<?php

namespace App\Services\University;

use App\Models\University;

class UniversityCityUpdateService
{
    public function update($universityCity, $data){
        if ($universityCity) {
            $universityCity->update($data);
            return true;
        }
        return false;
    }
}
