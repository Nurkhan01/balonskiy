<?php

namespace App\Models\Student\Employment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEmployment extends Model
{

    protected $fillable = [
        'student_id',
        'employment_id',
        'works_in_his_field',
    ];
    use HasFactory;

    public $timestamps = false;
}
