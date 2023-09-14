<?php

namespace App\Models\Student\DevelopingSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDevelopingSection extends Model
{

    protected $fillable = [
        'student_id',
        'developing_section_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
