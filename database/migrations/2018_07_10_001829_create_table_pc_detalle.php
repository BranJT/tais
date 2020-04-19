<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePcDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_detalle', function(Blueprint $table){
            $table->increments('id');
            $table->integer('proceso_caracterizacion_id')->references('id')->on('proceso_caracterizacion');
            $table->string('registro');
            $table->string('indicador');
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
        Schema::dropIfExists('pc_detalle');
    }
}
