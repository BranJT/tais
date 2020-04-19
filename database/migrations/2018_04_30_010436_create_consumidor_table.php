<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id')->references('id')->on('empresa');
            $table->string('nombre');
            $table->string('imagen');
            $table->integer('nivel');
            $table->integer('dependencia');
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
        Schema::dropIfExists('consumidor');
    }
}
