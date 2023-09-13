<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationProgramAccreditation extends Model
{
    protected $fillable = [
        'education_program_id',
        'report_links',
        'start_date',
        'end_date',
        'accreditation_type_id',
        'accreditation_body_id',
    ];
    use HasFactory;
    public $timestamps = false;
}
