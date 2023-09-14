<?php

namespace App\Services\Department;

use App\Models\University;

class DepartmentUpdateService
{
    /**
     * Обновляет данные по $dataId по указанной таблице
     * @param $department
     * @param $data
     * @return bool
     */
    public function update($department, $data){
        if ($department) {
            $department->update($data);
            return true;
        }
        return false;
    }
}
