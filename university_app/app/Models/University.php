<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name',
        'city_id',
        'computers_count',
        'internet_points_number',
        'internet_speed',
        'intercollegiate_library_access',
        'total_grant_funding',
        'email',
        'has_corporate_governance_bodies',
        'science_funding_amount',
        'science_funding_type_id'];
    use HasFactory;
    public $timestamps = false;
}
