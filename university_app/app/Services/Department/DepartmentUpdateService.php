<?php

namespace App\Services\Department;

use App\Models\University;

class DepartmentUpdateService
{
    public function update($department, $data){
        if ($department) {
            $department->update($data);
            return true;
        }
        return false;
    }
}
