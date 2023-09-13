<?php

namespace App\Models\Teacher\Publication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPublication extends Model
{
    protected $fillable = [
        'teacher_id',
        'publication_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
