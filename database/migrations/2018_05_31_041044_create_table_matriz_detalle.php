<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatrizDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_detalle', function (Blueprint $table){
            $table->increments('id');
            $table->integer('matriz_priorizacion_id')->references('id')->on('matriz_priorizacion');            
            $table->integer('matriz_parametro_id')->references('id')->on('matriz_parametro');
            $table->integer('proceso_id')->references('id')->on('proceso');
            $table->integer('puntaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriz_detalle');
    }
}
