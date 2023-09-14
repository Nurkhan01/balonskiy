<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishLevel extends Model
{
    protected $fillable = [
        'name'
    ];
    use HasFactory;
    public $timestamps = false;
}
