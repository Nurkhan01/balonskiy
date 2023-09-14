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
        'is_remote',
        'is_not_remote',
        'is_mook',
        'mook_platform_name',
        'mook_cource_duration',
    ];
    use HasFactory;

    public $timestamps = false;
}
