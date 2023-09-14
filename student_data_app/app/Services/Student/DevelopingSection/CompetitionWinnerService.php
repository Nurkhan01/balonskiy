<?php

namespace App\Services\Student\DevelopingSection;

use App\Models\Student\DevelopingSection\CompetitionWinner;

class CompetitionWinnerService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return CompetitionWinner::create($data);
    }
    // Обновляет данные по $dataId по указанной таблице
    public function update($dataId, $data){
        if ($dataId) {
            $dataId->update($data);
            return true;
        }
        return false;
    }
}
