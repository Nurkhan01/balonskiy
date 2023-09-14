<?php

namespace App\Models\Mobility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilityType extends Model
{
    protected $fillable = [
        'type',
    ];
    use HasFactory;
    public $timestamps = false;
}
