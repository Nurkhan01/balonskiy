<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityLaboratory extends Model
{
    protected $fillable = [
        'university_id',
        'laboratory_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
