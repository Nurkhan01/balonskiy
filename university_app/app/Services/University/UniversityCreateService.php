<?php

namespace App\Services\University;

use App\Models\University;

class UniversityCreateService
{
    public function create($data){
        return University::create($data);
    }
}
