<?php

namespace App\Models\Mobility\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryType extends Model
{
    protected $fillable = [
        'country_type',
    ];
    use HasFactory;
    public $timestamps = false;
}
