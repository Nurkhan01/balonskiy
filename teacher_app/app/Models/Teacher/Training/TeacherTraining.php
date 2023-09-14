<?php

namespace App\Models\Teacher\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherTraining extends Model
{
    protected $fillable = [
        'training_id',
        'teacher_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
