<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryType extends Model
{
    protected $fillable =['name'];
    use HasFactory;
    public $timestamps = false;
}
