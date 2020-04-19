<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTableroControl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablero_control', function(Blueprint $table){
            $table->increments('id');
            $table->integer('pc_detalle_id')->references('id')->on('pc_detalle');
            $table->string('objetivo');
            $table->string('metaRojo');
            $table->string('metaAmarillo');
            $table->string('metaVerde');
            $table->string('iniciativas');
            $table->string('responsable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablero_control');
    }
}
