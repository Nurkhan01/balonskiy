<?php

namespace App\Services;

use App\Models\Language;

class LanguageService
{
    public function create($data){
        return Language::create($data);
    }
    public function update($language, $data){
        if ($language) {
            $language->update($data);
            return true;
        }
        return false;
    }
}
