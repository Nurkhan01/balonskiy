<?php

namespace App\Services;

use App\Models\DecreeGosoTemplates;

class DecreeGosoTemplatesService
{
    public function create($data){
        return DecreeGosoTemplates::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
