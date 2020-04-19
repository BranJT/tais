<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatrizParametro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriz_parametro', function (Blueprint $table){
            $table->increments('id');
            $table->integer('matriz_priorizacion_id')->references('id')->on('matriz_priorizacion');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('peso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriz_parametro');
    }
}
