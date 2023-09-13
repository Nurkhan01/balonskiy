<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherLanguage extends Model
{
    protected $fillable = [
        'teacher_id',
        'language_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
