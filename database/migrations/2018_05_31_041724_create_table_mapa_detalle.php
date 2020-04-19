<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMapaDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapa_detalle', function(Blueprint $table){
            $table->increments('id');
            $table->integer('mapa_proceso_id')->references('id')->on('mapa_proceso');
            $table->integer('proceso_id')->references('id')->on('proceso');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapa_detalle');
    }
}
