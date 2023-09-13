<?php

namespace App\Services;

use App\Models\JointEpFinancingSource;

class JointEpFinancingSourceService
{
    public function create($data){
        return JointEpFinancingSource::create($data);
    }
    public function update($jointEpFinancingSource, $data){
        if ($jointEpFinancingSource) {
            $jointEpFinancingSource->update($data);
            return true;
        }
        return false;
    }
}
