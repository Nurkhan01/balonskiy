<?php

namespace App\Services;

use App\Models\GosoComponentName;

class GosoComponentNameService
{
    public function create($data){
        return GosoComponentName::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
