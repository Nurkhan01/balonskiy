<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationEducationProgram extends Model
{
    protected $fillable = [
        'education_module_id',
        'education_program_id',
        'goso_cycle_name_id',
        'education_discipline_id',
        'goso_component_name_id',
        'credit',
        'is_cv',
        'f_group_id',
        'is_confirmed',
        'component_status',
        'is_minor',
        'minor_f_group_id',
    ];
    use HasFactory;

    public $timestamps = false;
    public function educationModule()
    {
        return $this->belongsTo(EducationModule::class, 'education_module_id');
    }
}
