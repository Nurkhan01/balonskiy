<?php

namespace App\Models\Teacher\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'training_basis_id',
        'training_form_id',
        'duration',
        'payment_sum',
        'training_payment_type_id',
    ];
    use HasFactory;

    public $timestamps = false;
}
