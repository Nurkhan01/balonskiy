<?php

namespace App\Models\Student\DevelopingSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopingSection extends Model
{

    protected $fillable = [
        'name',
        'development_section_type_id'
    ];
    use HasFactory;
    public $timestamps = false;
}
