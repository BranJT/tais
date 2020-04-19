<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcesoSeguiActi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_seguimiento',function(Blueprint $table){
            $table->increments('id');
            $table->integer('mapa_proceso_id')->references('id')->on('mapa_proceso');
            $table->integer('subproceso_id')->references('id')->on('subproceso');
            $table->string('nombre');
            $table->string('flujo'); 
            $table->string('tipo'); 
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
        Schema::dropIfExists('proceso_seguimiento');
    }
}
