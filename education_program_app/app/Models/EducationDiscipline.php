<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDiscipline extends Model
{
    protected $fillable = [
        'credit',
        'department_id',
        'code',
        'name',
        'description',
        'knowledge',
        'abilities',
        'recommendation',
        'study_level_id',
        'education_language',
        'is_thread',
        'is_selectable',
        'need_computer',
        'is_multilanguage',
        'is_kazakh',
        'is_russian',
    ];
    use HasFactory;

    public $timestamps = false;
}
