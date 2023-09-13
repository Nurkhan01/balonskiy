<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\TeacherPublication;

class TeacherPublicationService
{
    public function create($data){
        return TeacherPublication::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
