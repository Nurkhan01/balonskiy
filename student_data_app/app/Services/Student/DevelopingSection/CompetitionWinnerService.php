<?php

namespace App\Services\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\CompetitionWinner;

class CompetitionWinnerService
{
    public function create($data){
        return CompetitionWinner::create($data);
    }
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
