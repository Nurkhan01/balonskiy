<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    protected $fillable = [
        'university_id',
        'accreditation_body_id',
        'report_links',
        'start_date',
        'end_date',
        'accreditation_type_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
