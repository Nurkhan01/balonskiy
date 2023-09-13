<?php

namespace App\Services\Accreditation;

use App\Models\University;

class AccreditationUpdateService
{
    public function update($accreditation, $data){
        if ($accreditation) {
            $accreditation->update($data);
            return true;
        }
        return false;
    }
}
