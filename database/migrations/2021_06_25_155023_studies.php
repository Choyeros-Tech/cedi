<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      
        Schema::create('studies', function (Blueprint $table) {
            $table->id(); 
            $table->string("patient",4)->nullable();  
            $table->string("tiroides",2)->nullable();
            $table->string("mama",2)->nullable();
            $table->string("renal",2)->nullable();
            $table->string("obsterico",2)->nullable();
            $table->string("prostata",2)->nullable();
            $table->string("pelvico_utero_anexos",2)->nullable();
            $table->string("higado_via_biliar",2)->nullable();
            $table->string("escrotal_test_espi",2)->nullable();
            $table->string("pancreas",2)->nullable();
            $table->string("electro_tiroides",2)->nullable();
            $table->string("electro_renal",2)->nullable();
            $table->string("electro_obstetrico",2)->nullable();
            $table->string("electro_prostata",2)->nullable();
            $table->string("datos_clinicos",30)->nullable();
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
        Schema::dropIfExists('studies');
    }
}
