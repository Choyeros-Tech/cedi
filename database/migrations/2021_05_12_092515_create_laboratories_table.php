<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->id();
            $table->string('patient');
            $table->string('doctor');
            $table->string('glucosa', 4)->nullable();
            $table->string('urea', 4)->nullable();
            $table->string('creatinina', 4)->nullable();
            $table->string('acido_urico', 4)->nullable();
            $table->string('colesterol_total', 4)->nullable();
            $table->string('trigliceridos', 4)->nullable();
            $table->string('albumina', 4)->nullable();
            $table->string('proteinas_totales', 4)->nullable();
            $table->string('relacion_ag', 4)->nullable();
            $table->string('hemoglobina', 4)->nullable();
            $table->string('glucosilada', 4)->nullable();
            $table->string('bilirrubinas', 4)->nullable();
            $table->string('rpdvdrl', 4)->nullable();
            $table->string('reacciones_febriles', 4)->nullable();
            $table->string('antiestreptolisinas', 4)->nullable();
            $table->string('proteina_c_reactiva', 4)->nullable();
            $table->string('factor_reumatoide', 4)->nullable();
            $table->string('det_gonadotropina', 4)->nullable();
            $table->string('perfil_tiroideo', 4)->nullable();
            $table->string('perfil_ginecologico', 4)->nullable();
            $table->string('ppc', 4)->nullable();
            $table->string('biometria_hematica', 4)->nullable();
            $table->string('sedimentacion_globular', 4)->nullable();
            $table->string('recuento_reticulosis', 4)->nullable();
            $table->string('recuento_plaquetas', 4)->nullable();
            $table->string('tiempo_protombina', 4)->nullable();
            $table->string('tiempo_sangrado', 4)->nullable();
            $table->string('grupo_sanguineo', 4)->nullable();
            $table->string('coprocultivo', 4)->nullable();
            $table->string('urocultivo', 4)->nullable();
            $table->string('espermocultivo', 4)->nullable();
            $table->string('cultivo_exudado', 4)->nullable();
            $table->string('cultivo_secrecion', 4)->nullable();
            $table->string('frotis', 4)->nullable();
            $table->string('antibiograma', 4)->nullable();
            $table->string('transamina_tgo', 4)->nullable();
            $table->string('transamina_tgp', 4)->nullable();
            $table->string('fostasa_alcalina', 4)->nullable();
            $table->string('fostasa_acida', 4)->nullable();
            $table->string('fraccion_prostatica', 4)->nullable();
            $table->string('amilasa', 4)->nullable();
            $table->string('coproparasitoscopico', 4)->nullable();
            $table->string('corologico', 4)->nullable();
            $table->string('sangre_oculta', 4)->nullable();
            $table->string('ameba_fresco', 4)->nullable();
            $table->string('raspado_perianal', 4)->nullable();
            $table->string('azucares_reductores', 4)->nullable();
            $table->string('examegn_general_orina', 4)->nullable();
            $table->string('cuantificacion_glucosa', 4)->nullable();
            $table->string('depuracion_creatinina', 4)->nullable();
            $table->string('otros')->nullable();
            $table->string('prediagnostico')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratories');
    }
}
