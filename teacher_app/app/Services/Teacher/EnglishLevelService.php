<?php

namespace App\Services\Teacher;

use App\Models\Teacher\EnglishLevel;

class EnglishLevelService
{
    public function create($data){
        return EnglishLevel::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
