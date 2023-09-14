<?php

namespace App\Services;

use App\Models\GraduateDocumentType;

class GraduateDocumentTypeService
{
    /**
     * Создает данные в таблицу graduate_document_type
     * @param $data
     * @return mixed
     */
    public function create($data){
        return GraduateDocumentType::create($data);
    }

    /**
     * Изменяет данные в таблице graduate_document_type
     * @param $graduateDocumentType
     * @param $data
     * @return bool
     */
    public function update($graduateDocumentType, $data){
        if ($graduateDocumentType) {
            $graduateDocumentType->update($data);
            return true;
        }
        return false;
    }
}
