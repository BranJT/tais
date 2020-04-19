<?php

use Illuminate\Database\Seeder;
use App\Model\PSdetalle;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ps_detalle')->delete();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Programar reunión';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //--------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Emite comunicado de reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.75; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepciona comunicado de reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.5; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Se elabora la agenda de la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Comunica la agenda a tratar';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.5; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Elaborar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 84; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Dar sugerencias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 48; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realizar Mejoras';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 70; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobar Estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 3; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 1;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Difundir estrategias';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 1; //0.2,,,se mide em mimutos
        $ps_detalle->save();


//ALTERNO ACTUAL(AA)

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Programar reunión';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //--------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Emite comunicado de reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.75; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Reprogramación de la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Asistencia obligatoria a la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Se elabora la agenda de la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Comunica la agenda a tratar';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.5; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Elaborar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 84; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Dar sugerencias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 48; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realizar Mejoras';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 70; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobar Estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 3; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 2;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Difundir estrategias';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 1; //0.2,,,se mide em mimutos
        $ps_detalle->save();

//NORMAL  PROPUESTO(NP)

         $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Programar  y emitir  reunión';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7.25; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //--------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepciona comunicado de reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.5; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Se comunica y elabora la agenda de la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2.2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Elaborar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 84; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Dar sugerencias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 48; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realizar Mejoras y aprobar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 72; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 3;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Difundir estrategias';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 1; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        

//ALTERNO PROPUESTO(AP)

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Programar  y emitir  reunión';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7.25; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //--------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Reprogramación de reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //--------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Asistencia obligatoria a la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 1; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Se comunica y elabora la agenda de la reunión';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 2.2; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Elaborar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 84; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Dar sugerencias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 48; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realizar Mejoras y aprobar estrategias';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 72; //0.2,,,se mide em mimutos
        $ps_detalle->save();
        //------------------------
        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 4;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Difundir estrategias';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 1; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        //VRADOMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 5;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibir datos del mercado';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 5;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar la estrategia de mercado';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 3; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 5;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar alguna solicitud de campaña';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 5;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Desarrollar una campaña publicitaria';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        //ALTERMO

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 6;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibir datos del mercado';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 6;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar la estrategia de mercado';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 3; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 6;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar alguna solicitud de campaña';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 6;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Desarrollar una estrategia de mercado';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 6;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Desarrollar una campaña publicitaria';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        //************************************************************************************KARLA

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibir materia prima';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar cantidad y calidad de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar en el inventario';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Descargar materia prima';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Clasificar la materia prima';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar condiciones del almacen';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 7;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Ubicar materiales en sus espacios respectivos';
        $ps_detalle->tipo= 'almacenamiento';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();




        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcionar la cantidad de material entrante';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Evaluar criterios de aprobacion de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 8; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar ingreso de los materiales';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Descargar los materiales';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Evaluar la calidad de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Esperar aprobacion de los materiales';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 8;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Clasificar los materiales en el almacen';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();




        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibir materia prima';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar cantidad y calidad de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar en el inventario';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Descargar materia prima';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Clasificar la materia prima';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificar condiciones del almacen';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Acondicionar almacen';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 9;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Ubicar materiales en sus espacios respectivos';
        $ps_detalle->tipo= 'almacenamiento';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();



        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcionar la cantidad de material entrante';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Evaluar criterios de aprobacion de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 8; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar ingreso de los materiales';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Descargar los materiales';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Evaluar la calidad de los materiales';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Esperar aprobacion de los materiales';
        $ps_detalle->tipo= 'demora';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Rechazar el material';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 10;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Actualizar el registro de almacen';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        //************************************************************************************STEFAMI

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Extracción de muestras';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Llevar al laboratorio';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica muestra';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibe muestra';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.2; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realiza ensayo';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 120; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Obtiene resultados';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica resultados';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Envia resultados';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Analiza resultados';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 11;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobacion de calidad';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();



        //FLUJO ALTERNO NO CUMPLE NORMATIVA 

         $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Extracción de muestras';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Llevar al laboratorio';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica muestra';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recibe muestra';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 0.2; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Realiza ensayo';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 120; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Obtiene resultados';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica resultados';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Envia resultados';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Analiza resultados';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Reporta inconsistencia';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 12;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Desecha producto';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 70; //0.2,,,se mide em mimutos
        $ps_detalle->save();



        //REDISEÑO 
         $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Extracción de muestras';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Llevar al laboratorio';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Revisar y verificar muestra';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 16; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Preparar maquinarias e instrumentos';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 6; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Iniciar evaluación de calidad';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 4; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Obtiene y analiza resultados';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica requisitos de normativa tecnica';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 13;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobacion de calidad';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        //REDISEÑO-ALTERNO 

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Extracción de muestras';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Llevar al laboratorio';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Revisar y verificar muestra';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 16; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Preparar maquinarias e instrumentos';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 6; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Iniciar evaluación de calidad';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 4; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Obtiene y analiza resultados';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verifica requisitos de normativa tecnica';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Analiza inconsistencia';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 14;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Desechar producto';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 60; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        //************************************************************************************FATIMA

        //ACTUAL NORMAL

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcion de materiales';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 40; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificacion de la cantidad y calidad de los materiales recibidos';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 45; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar en el inventario la entrada de materiales';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Almacenar los materiales ';
        $ps_detalle->tipo= 'almacenaje';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 50; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Supervisar el inventario en los almacenes';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 40; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar los despachos de materiales de los almacenes';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobar la factura de los proveedores';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Revisar y firmar la factura de pago al proveedor';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 15; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 15;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Envio de factura al area de finanzas';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 6; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        //ALTERNO ACTUAL

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 16;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcion de materiales';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 40; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 16;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Verificación de la cantidad y calidad de los materiales recibidos';
        $ps_detalle->tipo= 'inspeccion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 45; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 16;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Notificar al asistente de compra';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7; //0.2,,,se mide em mimutos
        $ps_detalle->save();

     


        //ACTUAL PROPUESTO

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcion y verificacion de materiales ';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 70; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar en el inventario los materiales recibidos';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 25; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Almacenar los materiales ';
        $ps_detalle->tipo= 'almacenaje';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 35; //0.2,,,se mide em mimutos
        $ps_detalle->save();



        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Supervisar el inventario en los almacenes';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 30; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Registrar los despachos de materiales de los almacenes';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 20; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Aprobar la factura de los proveedores';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 8; //0.2,,,se mide em mimutos
        $ps_detalle->save();

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Revisar y firmar la factura de pago al proveedor';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 10; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 17;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Envio de factura al area de finanzas';
        $ps_detalle->tipo= 'transporte';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 5; //0.2,,,se mide em mimutos
        $ps_detalle->save();


        //ALTERNO PROPUESTO

        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 18;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Recepcion y verificacion de materiales ';
        $ps_detalle->tipo= 'combinada';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 70; //0.2,,,se mide em mimutos
        $ps_detalle->save();




        $ps_detalle = new PSdetalle();
        $ps_detalle->proceso_seguimiento_id= 18;  //MO POMGA MMADA
        $ps_detalle->actividad= 'Notificar al asistente de compra';
        $ps_detalle->tipo= 'operacion';//'operacion', 'transporte', 'demora' , 'inspeccion', 'almacenamiento', 'combinada'
        $ps_detalle->tiempo= 7; //0.2,,,se mide em mimutos
        $ps_detalle->save();


    }
}
