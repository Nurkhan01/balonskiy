<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationModule extends Model
{
    protected $fillable = [
        'module',
        'name',
        'put_status',
        'education_program_id',
        'decree_goso_templates_id',
        'description',
    ];
    use HasFactory;

    public $timestamps = false;
    public function formations()
    {
        return $this->hasMany(FormationEducationProgram::class, 'education_module_id');
    }
}
