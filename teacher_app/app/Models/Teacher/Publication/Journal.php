<?php

namespace App\Models\Teacher\Publication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'name',
        'quartile',
        'site_score',
        'impact_factor',
    ];
    use HasFactory;

    public $timestamps = false;
}
