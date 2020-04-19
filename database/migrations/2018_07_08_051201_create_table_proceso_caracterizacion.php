<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcesoCaracterizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_caracterizacion',function(Blueprint $table){
            $table->increments('id');
            $table->integer('mapa_proceso_id')->references('id')->on('mapa_proceso');
            $table->integer('subproceso_id')->references('id')->on('subproceso');
            $table->string('nombre');
            $table->string('responsable');
            $table->string('objetivo');
            $table->string('alcance');
            $table->string('requisitosNormativos');
            $table->string('requisitosAplicable');
            $table->string('entradasCriticas');
            $table->string('actividadesRealizadas');
            $table->string('medidasControl');
            $table->string('salidasCriticas');
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
        Schema::dropIfExists('proceso_caracterizacion');
    }
}
