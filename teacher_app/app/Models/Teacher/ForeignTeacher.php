<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignTeacher extends Model
{
    protected $fillable = [
        'teacher_id',
        'foreign_university_id',
        'teacher_financing_type_id',
        'financing_sum',
        'is_in_qswur',
        'country_id',
        'lecture_hours_count',
        'seminar_hours_count',
        'masterclass_hours_count',
        'training_hours_count',
        'credits_count',
        'ects_credits_count',
    ];
    use HasFactory;

    public $timestamps = false;
}
