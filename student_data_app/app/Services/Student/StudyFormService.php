<?php

namespace App\Services\Student;

use App\Models\Student\StudyForm;

class StudyFormService
{
    public function create($data){
        return StudyForm::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
