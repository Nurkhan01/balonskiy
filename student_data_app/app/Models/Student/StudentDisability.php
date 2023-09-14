<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDisability extends Model
{
    protected $fillable = [
        'student_id',
        'type',
    ];
    use HasFactory;

    public $timestamps = false;
}
