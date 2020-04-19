<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatrizPriorizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_priorizacion', function (Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id')->references('id')->on('empresa');
            $table->integer('unidad_negocio_id')->references('id')->on('unidad_negocio');
            $table->integer('mapa_proceso_id')->references('id')->on('mapa_proceso');
            $table->string('nombre');
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
        Schema::dropIfExists('matriz_priorizacion');
    }
}
