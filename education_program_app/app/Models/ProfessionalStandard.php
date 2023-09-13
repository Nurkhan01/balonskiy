<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalStandard extends Model
{
    protected $fillable = [
        'name',
        'order_number',
        'order_date',
    ];
    use HasFactory;

    public $timestamps = false;
}
