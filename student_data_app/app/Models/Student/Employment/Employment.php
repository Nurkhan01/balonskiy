<?php

namespace App\Models\Student\Employment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{

    protected $fillable = [
        'working_start_date',
        'working_end_date',
    ];
    use HasFactory;

    public $timestamps = false;
}
