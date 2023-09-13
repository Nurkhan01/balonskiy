<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditTimeType extends Model
{
    protected $fillable = [
        'is_standard',
        'credit',
    ];
    use HasFactory;

    public $timestamps = false;
}
