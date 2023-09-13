<?php

namespace App\Models\Student\DevelopingSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopmentSectionType extends Model
{

    protected $fillable = [
        'name',
    ];
    use HasFactory;
    public $timestamps = false;
}
