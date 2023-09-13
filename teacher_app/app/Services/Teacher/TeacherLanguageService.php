<?php

namespace App\Services\Teacher;

use App\Models\Teacher\TeacherLanguage;

class TeacherLanguageService
{
    public function create($data){
        return TeacherLanguage::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
