<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMapaProceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapa_proceso', function (Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id')->references('id')->on('empresa');
            $table->integer('unidad_negocio_id')->references('id')->on('unidad_negocio');
            $table->string('nombre');
            $table->string('entrada');
            $table->string('salida');
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
        Schema::dropIfExists('mapa_proceso');
    }
}
