<?php

namespace App\Services\Accreditation;

use App\Models\AccreditationBody;

class AccreditationBodyCreateService
{
    public function create($data){
        return AccreditationBody::create($data);
    }
}
