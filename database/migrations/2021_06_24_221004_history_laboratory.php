<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoryLaboratory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_laboratory', function (Blueprint $table) {

            $table->id();  
            $table->string("patient",4)->nullable();
            $table->string("fechas",30)->nullable();
            $table->string("hemoglobina",30)->nullable();
            $table->string("hematocrito",30)->nullable();
            $table->string("leucocito",30)->nullable();
            $table->string("plaquetas",30)->nullable();
            $table->string("glucosa_serica",30)->nullable();
            $table->string("urea_serica",30)->nullable();
            $table->string("creatinina",30)->nullable();
            $table->string("acido_urico_serico",30)->nullable();
            $table->string("colesterol_total",30)->nullable();
            $table->string("trigliceridos",30)->nullable();
            $table->string("hdl",30)->nullable();
            $table->string("ldl",30)->nullable();
            $table->string("vldl",30)->nullable();
            $table->string("color",30)->nullable();
            $table->string("aspecto",30)->nullable();
            $table->string("densidad",30)->nullable();
            $table->string("ph",30)->nullable();
            $table->string("glucosa",30)->nullable();
            $table->string("proteinas",30)->nullable();
            $table->string("sangre",30)->nullable();
            $table->string("cuerpos_cetonicos",30)->nullable();
            $table->string("urobilinogeno",30)->nullable();
            $table->string("nitritos",30)->nullable();
            $table->string("esterasa_leucocitaria",30)->nullable();

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
        Schema::dropIfExists('history_laboratory');
    }
}
