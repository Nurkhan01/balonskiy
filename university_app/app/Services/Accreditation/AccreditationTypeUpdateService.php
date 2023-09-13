<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationTypeUpdateService
{
    public function update($accreditationType, $data){
        if ($accreditationType) {
            $accreditationType->update($data);
            return true;
        }
        return false;
    }
}
