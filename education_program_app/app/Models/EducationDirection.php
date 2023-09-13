<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDirection extends Model
{
    protected $fillable = [
        'name',
        'education_field_id',
    ];
    use HasFactory;
    public $timestamps = false;
}
