<?php

namespace App\Services\Teacher;

use App\Models\Teacher\ForeignTeacherConsultation;

class ForeignTeacherConsultationService
{
    public function create($data){
        return ForeignTeacherConsultation::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
