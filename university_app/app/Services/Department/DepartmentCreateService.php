<?php

namespace App\Services\Department;

use App\Models\Department;

class DepartmentCreateService
{
    /**
     * Создает запись в базе данных для указанной таблицы
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Department::create($data);
    }
}
