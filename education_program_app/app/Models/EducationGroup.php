<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationGroup extends Model
{
    protected $fillable = [
        'name',
        'code',
        'study_level_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
