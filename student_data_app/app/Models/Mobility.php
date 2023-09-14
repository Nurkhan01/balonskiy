<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    protected $fillable = [
        'student_id',
        'mobility_type_id',
        'country_id',
        'university_name',
        'mobility_payment_type_id',
        'agreement_type_id',
        'mobility_start_date',
        'mobility_end_date',
        'payment_amount',
    ];
    use HasFactory;

    public $timestamps = false;
}
