<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsFacility extends Model
{
    protected $fillable = [
        'name',
        'expluatation_start_year',
        'area',
    ];
    use HasFactory;

    public $timestamps = false;
}
