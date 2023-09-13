<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecreeGosoTemplates extends Model
{
    protected $fillable = [
        'decree',
        'date',
        'status',
    ];
    use HasFactory;

    public $timestamps = false;
}
