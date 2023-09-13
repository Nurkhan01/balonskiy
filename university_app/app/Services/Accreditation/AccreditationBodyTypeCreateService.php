<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationBodyType;

class AccreditationBodyTypeCreateService
{
    public function create($data){
        return AccreditationBodyType::create($data);
    }
}
