<?php

namespace App\Services\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\StudentDevelopingSection;

class StudentDevelopingSectionService
{
    public function create($data){
        return StudentDevelopingSection::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
