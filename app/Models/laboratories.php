<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratories extends Model
{
    public $table = "laboratories";
    use HasFactory;
    protected $fillable = [
        'patient',
        'doctor',
        'glucosa',
        'urea',
        'creatinina',
        'acido_urico',
        'colesterol_total',
        'trigliceridos',
        'albumina',
        'proteinas_totales',
        'relacion_ag',
        'hemoglobina',
        'glucosilada',
        'bilirrubinas',
        'rpdvdrl',
        'reacciones_febriles',
        'antiestreptolisinas',
        'proteina_c_reactiva',
        'factor_reumatoide',
        'det_gonadotropina',
        'perfil_tiroideo',
        'perfil_ginecologico',
        'ppc',
        'biometria_hematica',
        'sedimentacion_globular',
        'recuento_reticulosis',
        'recuento_plaquetas',
        'tiempo_protombina',
        'tiempo_sangrado',
        'grupo_sanguineo',
        'coprocultivo',
        'urocultivo',
        'espermocultivo',
        'cultivo_exudado',
        'cultivo_secrecion',
        'frotis',
        'antibiograma',
        'transamina_tgo',
        'transamina_tgp',
        'fostasa_alcalina',
        'fostasa_acida',
        'fraccion_prostatica',
        'amilasa',
        'coproparasitoscopico',
        'corologico',
        'sangre_oculta',
        'ameba_fresco',
        'raspado_perianal',
        'azucares_reductores',
        'examegn_general_orina',
        'cuantificacion_glucosa',
        'depuracion_creatinina',
        'otros',
        'prediagnostico'
    ];
}
