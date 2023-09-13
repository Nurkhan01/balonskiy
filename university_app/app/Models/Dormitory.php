<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    protected $fillable = [
        'dormitory_type_id',
        'expluatation_start_year',
        'area',
        'payment_per_month',
        'payment_per_year'];
    use HasFactory;
    public $timestamps = false;
}
