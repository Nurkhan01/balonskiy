<?php

namespace App\Services\Laboratory;

use App\Models\UniversityLaboratory;

class UniversityLaboratoryCreateService
{
    public function create($data){
        return UniversityLaboratory::create($data);
    }
}
