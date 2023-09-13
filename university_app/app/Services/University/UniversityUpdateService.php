<?php

namespace App\Services\University;

use App\Models\University;

class UniversityUpdateService
{
    public function update($university, $data){
        if ($university) {
            $university->update($data);
            return true;
        }
        return false;
    }
}
