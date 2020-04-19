<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatrizProceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_proceso', function(Blueprint $table){
            $table->increments('id');
            $table->integer('matriz_priorizacion_id')->references('id')->on('matriz_priorizacion');
            $table->integer('proceso_id')->references('id')->on('proceso');
            $table->string('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriz_proceso');
    }
}
