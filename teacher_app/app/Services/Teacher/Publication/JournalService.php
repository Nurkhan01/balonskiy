<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\Journal;

class JournalService
{
    public function create($data){
        return Journal::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
