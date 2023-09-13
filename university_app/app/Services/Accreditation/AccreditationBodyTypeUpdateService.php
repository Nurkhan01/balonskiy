<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationBodyTypeUpdateService
{
    public function update($accreditationBodyType, $data){
        if ($accreditationBodyType) {
            $accreditationBodyType->update($data);
            return true;
        }
        return false;
    }
}
