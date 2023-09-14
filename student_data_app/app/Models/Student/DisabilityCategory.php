<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisabilityCategory extends Model
{
    protected $fillable = [
        'category',
    ];
    use HasFactory;
    public $timestamps = false;
}
