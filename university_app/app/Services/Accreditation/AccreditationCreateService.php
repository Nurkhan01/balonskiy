<?php

namespace App\Services\Accreditation;

use App\Models\Accreditation;

class AccreditationCreateService
{
    public function create($data){
        return Accreditation::create($data);
    }
}
