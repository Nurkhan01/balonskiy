<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationProgram extends Model
{
    protected $fillable = [
        'name',
        'department_id',
        'language_id',
        'code',
        'study_level_id',
        'education_field_id',
        'is_inclusive_study',
        'professional_standard_id',
        'registration_date',
        'type',
        'credits',
        'education_direction_id',
        'education_group_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
