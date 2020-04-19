<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcesoFlujo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_flujo',function(Blueprint $table){
            $table->increments('id');
            $table->integer('mapa_proceso_id')->references('id')->on('mapa_proceso');
            $table->integer('subproceso_id')->references('id')->on('subproceso');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('flujo');  
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
        Schema::dropIfExists('proceso_flujo');
    }
}
