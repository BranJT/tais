<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePsDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ps_detalle',function(Blueprint $table){
            $table->increments('id');
            $table->integer('proceso_seguimiento_id')->references('id')->on('proceso_seguimiento');
            $table->string('actividad');
            $table->string('tipo');
            $table->float('tiempo');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ps_detalle');
    }
}
