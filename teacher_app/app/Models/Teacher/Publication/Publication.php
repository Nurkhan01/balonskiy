<?php

namespace App\Models\Teacher\Publication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'name',
        'science_field_id',
        'publication_date',
        'journal_id',
        'university_id',
        'is_together_with_student',
    ];
    use HasFactory;

    public $timestamps = false;
}
