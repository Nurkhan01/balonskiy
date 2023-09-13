<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignTeacherConsultation extends Model
{
    protected $fillable = [
        'foreign_teacher_id',
        'student_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
