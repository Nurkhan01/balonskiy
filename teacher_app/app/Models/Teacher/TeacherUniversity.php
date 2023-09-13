<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherUniversity extends Model
{
    protected $fillable = [
        'university_id',
        'teacher_id',
        'working_start_date',
        'working_end_date',
    ];
    use HasFactory;

    public $timestamps = false;
}
