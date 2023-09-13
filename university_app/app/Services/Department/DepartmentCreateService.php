<?php

namespace App\Services\Department;

use App\Models\Department;

class DepartmentCreateService
{
    public function create($data){
        return Department::create($data);
    }
}
