<?php

namespace App\Models\Mobility\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'country_type_id',
    ];
    use HasFactory;
    public $timestamps = false;
}
