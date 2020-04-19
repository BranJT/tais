<?php

use Illuminate\Database\Seeder;
use App\Model\ProcesoFlujo;

class ProcesoFlujoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proceso_flujo')->delete();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 1;
        $procesoFlujo->nombre= 'Flujo Elaborar Estrategias';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'Elaborar_Estrategias.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 1;
        $procesoFlujo->nombre= 'Flujo Elaborar Estrategias Rediseno';
        $procesoFlujo->tipo= 'Elaborar_Estrategias_Rediseno'; // normal/rediseno
        $procesoFlujo->flujo= 'Elaborar_Estrategias_Rediseno.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        
        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 3;
        $procesoFlujo->nombre= 'Flujo Marketing';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'FlujoMarketimg.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();
        /*
        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 11;
        $procesoFlujo->nombre= 'Flujo Planificacion';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'Planificacion.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 11;
        $procesoFlujo->nombre= 'Flujo Planificacion Rediseno';
        $procesoFlujo->tipo= 'rediseno'; // normal/rediseno
        $procesoFlujo->flujo= 'Planificacion_rediseño.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();*/

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 12;
        $procesoFlujo->nombre= 'Recepcion MP Normal';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'RecepcionMP.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();


        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 12;
        $procesoFlujo->nombre= 'Recepcion MP Rediseno';
        $procesoFlujo->tipo= 'rediseno'; // normal/rediseno
        $procesoFlujo->flujo= 'RecepcionMP_Rediseño.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();     

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 18;
        $procesoFlujo->nombre= 'Flujo Control de Calidad';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'controlCalidad.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 18;
        $procesoFlujo->nombre= 'Flujo Control de Calidad Rediseno';
        $procesoFlujo->tipo= 'rediseno'; // normal/rediseno
        $procesoFlujo->flujo= 'controlCalidad_rediseno.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 20;
        $procesoFlujo->nombre= 'Flujo Gestion almacen';
        $procesoFlujo->tipo= 'normal'; // normal/rediseno
        $procesoFlujo->flujo= 'GestionAlmacen.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();

        $procesoFlujo = new ProcesoFlujo();
        $procesoFlujo->mapa_proceso_id= 1;
        $procesoFlujo->subproceso_id= 20;
        $procesoFlujo->nombre= 'Flujo Gestion almacen Rediseno';
        $procesoFlujo->tipo= 'rediseno'; // normal/rediseno
        $procesoFlujo->flujo= 'Gestionalmacen_rediseño.bpm';  // adjuntar su diagrama flujo
        $procesoFlujo->save();
    }
}
