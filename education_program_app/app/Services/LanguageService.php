<?php

namespace App\Services;

use App\Models\Language;

class LanguageService
{
    /**
     * Создает данные в таблицу language
     * @param $data
     * @return mixed
     */
    public function create($data){
        return Language::create($data);
    }

    /**
     * Изменяет данные в таблице language
     * @param $language
     * @param $data
     * @return bool
     */
    public function update($language, $data){
        if ($language) {
            $language->update($data);
            return true;
        }
        return false;
    }
}
