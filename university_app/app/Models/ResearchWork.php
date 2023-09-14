<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchWork extends Model
{
    protected $fillable = [
        'university_id',
        'name',
        'research_work_type_id',
        'revenue',
    ];

    use HasFactory;

    public $timestamps = false;
}
