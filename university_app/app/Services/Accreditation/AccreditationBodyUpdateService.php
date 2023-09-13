<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationBodyUpdateService
{
    public function update($accreditationBody, $data){
        if ($accreditationBody) {
            $accreditationBody->update($data);
            return true;
        }
        return false;
    }
}
