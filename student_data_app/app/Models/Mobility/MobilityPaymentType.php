<?php

namespace App\Models\Mobility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilityPaymentType extends Model
{
    protected $fillable = [
        'type',
        'total_amount'
    ];
    use HasFactory;
    public $timestamps = false;
}
