<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'name',
        'type',
        'expluatation_start_year',
        'total_area',
        'classroom_area',
        'non_classroom_area',
    ];
    use HasFactory;

    public $timestamps = false;
}
