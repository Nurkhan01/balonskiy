<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherData extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'last_name_eng',
        'first_name_eng',
        'education_field_id',
        'citizenship_id',
        'degree_id',
        'teaches_remote_courses',
        'teaches_non_formal_courses',
        'is_foreign',
        'birth_date',
        'has_ielts_toefl',
        'english_level_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
