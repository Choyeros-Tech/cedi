<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studies extends Model
{
    public $table = "studies";
    use HasFactory;

    protected $fillable = [
        'patient',
        'tiroides',
        'mama',
        'renal',
        'obsterico',
        'prostata',
        'pelvico_utero_anexos',
        'higado_via_biliar',
        'escrotal_test_espi',
        'pancreas',
        'electro_tiroides',
        'electro_renal',
        'electro_obstetrico',
        'electro_prostata',
        'datos_clinicos'
    ];
}
