<?php

namespace App\Models\Teacher\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingBasis extends Model
{
    protected $fillable = [
        'name'
    ];
    use HasFactory;
    public $timestamps = false;
}
