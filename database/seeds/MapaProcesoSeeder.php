<?php

use Illuminate\Database\Seeder;
use App\Model\MapaProceso;
use App\Model\MapaDetalle;

class MapaProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mapa_proceso')->delete();

        $mapaProceso = new MapaProceso();
        $mapaProceso->empresa_id = 1;
        $mapaProceso->unidad_negocio_id = 1;
        $mapaProceso->nombre = 'Mapa General';
        $mapaProceso->entrada = 'Requisitos del cliente';
        $mapaProceso->salida = 'Satisfaccion del cliente';
        $mapaProceso->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 1;
        $mapaDetalle->estado = 'priorizado';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 2;
        $mapaDetalle->estado = 'priorizado';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 3;
        $mapaDetalle->estado = 'nada';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 4;
        $mapaDetalle->estado = 'priorizado';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 5;
        $mapaDetalle->estado = 'nada';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 6;
        $mapaDetalle->estado = 'priorizado';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 7;
        $mapaDetalle->estado = 'priorizado';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 8;
        $mapaDetalle->estado = 'nada';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 9;
        $mapaDetalle->estado = 'nada';
        $mapaDetalle->save();

        $mapaDetalle = new MapaDetalle();
        $mapaDetalle->mapa_proceso_id = 1;
        $mapaDetalle->proceso_id = 10;
        $mapaDetalle->estado = 'nada';
        $mapaDetalle->save();
    }
}
