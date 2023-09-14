<?php

namespace App\Services\Teacher\Publication;

use App\Models\Teacher\Publication\Journal;

class JournalService
{
    // Создает запись в базе данных для указанной таблицы
    public function create($data){
        return Journal::create($data);
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
