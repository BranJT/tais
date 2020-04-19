<?php

use Illuminate\Database\Seeder;
use App\Model\ProcesoSeguimiento;

class ProcesoSeguiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('proceso_seguimiento')->delete();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 1;
        $procesoSeguimiento->nombre= 'ElaborarEstrategiasSegui_NA';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();


         $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 1;
        $procesoSeguimiento->nombre= 'ElaborarEstrategiasSegui_AA';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 1;
        $procesoSeguimiento->nombre= 'ElaborarEstrategiasSegui_NP';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 1;
        $procesoSeguimiento->nombre= 'ElaborarEstrategiasSegui_AP';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();

        ///VRAMDOMMMMMM
        
        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 3;
        $procesoSeguimiento->nombre= 'Marketing Seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 3;
        $procesoSeguimiento->nombre= 'Marketing Seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        //KARLA

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 12;
        $procesoSeguimiento->nombre= 'RecepcionMP seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 12;
        $procesoSeguimiento->nombre= 'RecepcionMP seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 12;
        $procesoSeguimiento->nombre= 'RecepcionMP seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();               

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 12;
        $procesoSeguimiento->nombre= 'RecepcionMP seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();

        //STEAFMII

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 18;
        $procesoSeguimiento->nombre= 'Control de Calidad del cemento seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();


        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 18;
        $procesoSeguimiento->nombre= 'Control de Calidad del cemento seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();


         $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 18;
        $procesoSeguimiento->nombre= 'Control de Calidad del cemento seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();


        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 18;
        $procesoSeguimiento->nombre= 'Control de Calidad del cemento seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();

        //FATIMA

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 20;
        $procesoSeguimiento->nombre= 'Gestion almacen Seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 20;
        $procesoSeguimiento->nombre= 'Gestion almacen Seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'actual'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 20;
        $procesoSeguimiento->nombre= 'Gestion almacen Seguimiento';
        $procesoSeguimiento->flujo= 'normal'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();

        $procesoSeguimiento = new ProcesoSeguimiento();
        $procesoSeguimiento->mapa_proceso_id= 1;
        $procesoSeguimiento->subproceso_id= 20;
        $procesoSeguimiento->nombre= 'Gestion almacen Seguimiento';
        $procesoSeguimiento->flujo= 'alterno'; //normal, alterno
        $procesoSeguimiento->tipo= 'propuesto'; // actual, propuesto
        $procesoSeguimiento->save();


    }
}
