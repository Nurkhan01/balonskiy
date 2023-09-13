<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GosoCycleName extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'study_level',
        'put_status',
    ];
    use HasFactory;

    public $timestamps = false;
}
