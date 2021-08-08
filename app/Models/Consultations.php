<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient',
        'weight',
        'size',
        'TA',
        'temperature',
        'C',
        'R',
        'other',
        'doc'
    ];
}
