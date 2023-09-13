<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;
    public $timestamps = false;
}
