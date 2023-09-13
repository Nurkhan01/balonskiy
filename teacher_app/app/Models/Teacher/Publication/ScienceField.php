<?php

namespace App\Models\Teacher\Publication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScienceField extends Model
{
    protected $fillable = [
        'name',
        'cipher',
    ];
    use HasFactory;

    public $timestamps = false;
}
