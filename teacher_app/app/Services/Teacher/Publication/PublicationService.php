<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\Publication;

class PublicationService
{
    public function create($data){
        return Publication::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
