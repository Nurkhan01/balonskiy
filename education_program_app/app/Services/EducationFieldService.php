<?php

namespace App\Services;

use App\Models\EducationField;

class EducationFieldService
{
    public function create($data){
        return EducationField::create($data);
    }
    public function update($educationField, $data){
        if ($educationField) {
            $educationField->update($data);
            return true;
        }
        return false;
    }
}
