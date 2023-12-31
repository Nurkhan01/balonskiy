<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable =[
        'name',
        'university_id'
    ];
    use HasFactory;
    public $timestamps = false;
}
