<?php

namespace App\Services;

use App\Models\GraduateDocumentType;

class GraduateDocumentTypeService
{
    public function create($data){
        return GraduateDocumentType::create($data);
    }
    public function update($graduateDocumentType, $data){
        if ($graduateDocumentType) {
            $graduateDocumentType->update($data);
            return true;
        }
        return false;
    }
}
