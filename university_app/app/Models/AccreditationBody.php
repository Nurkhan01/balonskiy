<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationBody extends Model
{
    protected $fillable = ['name','accreditation_body_type_id'];
    use HasFactory;
    public $timestamps = false;
}
