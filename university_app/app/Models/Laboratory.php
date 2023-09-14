<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = [
        'profile',
        'year',
    ];
    use HasFactory;

    public $timestamps = false;
}
