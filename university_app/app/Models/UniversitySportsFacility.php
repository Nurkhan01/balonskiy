<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversitySportsFacility extends Model
{
    protected $fillable = [
        'university_id',
        'sports_facilities_id',
    ];
    use HasFactory;
    public $timestamps = false;
}
