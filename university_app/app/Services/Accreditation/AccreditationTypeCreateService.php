<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationType;

class AccreditationTypeCreateService
{
    public function create($data){
        return AccreditationType::create($data);
    }
}
