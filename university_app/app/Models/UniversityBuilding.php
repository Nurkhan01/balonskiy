<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityBuilding extends Model
{
    protected $fillable = [
        'university_id',
        'building_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
