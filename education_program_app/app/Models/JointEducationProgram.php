<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JointEducationProgram extends Model
{
    protected $fillable = [
        'education_program_id',
        'main_university_id',
        'partner_university_id',
        'foreign_partner_university_id',
        'contract_start_date',
        'contract_end_date',
        'joint_ep_financing_source_id',
        'graduate_document_type_id',
        'interaction_problems',
        'problem_solving_suggestions',
        'is_double_diploma',
    ];
    use HasFactory;

    public $timestamps = false;
}
