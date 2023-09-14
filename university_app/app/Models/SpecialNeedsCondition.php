<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialNeedsCondition extends Model
{
    protected $fillable = [
        'university_id',
        'entrance_count',
        'sanitary_facilities_count',
        'help_button_count',
        'has_ramps__or_lifts',
        'has_stairs_with_handrails',
        'has_special_parkings',
        'has_navigation_means',
        'has_stairs_constrast_color',
    ];
    use HasFactory;

    public $timestamps = false;
}
