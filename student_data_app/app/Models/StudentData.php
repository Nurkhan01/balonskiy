<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    protected $fillable = [
        'IID',
        'student_location_type_id',
        'last_name',
        'first_name',
        'last_name_eng',
        'first_name_eng',
        'education_program_id',
        'enroll_status_id',
        'study_course',
        'enter_year',
        'graduate_year',
        'payment_type_id',
        'study_form_id',
        'is_need_dormitory',
        'employment_status_id',
        'after_graduation_status',
        'sports_category_id',
        'has_special_needs',
        'nationality_id',
        'disability_category_id',
    ];
    use HasFactory;
    public $timestamps = false;
}
