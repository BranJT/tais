<?php

use Illuminate\Database\Seeder;
use App\Model\TableroControl;

class TableroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tablero_control')->delete();


        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 1;
        $tableroControl->objetivo= 'INCREMENTAR EL CUMPLIMIENTO DE LOS OBJETIVOS ESTRATÉGICOS';
        $tableroControl->metaRojo= 'Menor a 75%';
        $tableroControl->metaAmarillo= 'Desde el 75% hasta el 89%  ';
        $tableroControl->metaVerde= 'Mayor igual a 90%';
        $tableroControl->iniciativas= 'Definir claramente los Objetivos Estratégicos, Llegar a todo el personal de la empresa';
        $tableroControl->responsable= 'Gerente General';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 2;
        $tableroControl->objetivo= 'MEJORAR LA EFICIENCIA EN LA EJECUCIÓN DE LOS RECURSOS';
        $tableroControl->metaRojo= 'Menor a 75%';
        $tableroControl->metaAmarillo= 'Desde el 75% hasta el 89%  ';
        $tableroControl->metaVerde= 'Mayor igual a 90%';
        $tableroControl->iniciativas= 'Distribuir los recursos a cada Proceso , Capacitación constante al personal';
        $tableroControl->responsable= 'Gerente General';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 3;
        $tableroControl->objetivo= 'INCREMENTAR  EL CUMPLIMIENTO DEL PLAN DE ACCIÓN ANUAL';
        $tableroControl->metaRojo= 'Menor a 75%';
        $tableroControl->metaAmarillo= 'Desde el 75% hasta el 89%  ';
        $tableroControl->metaVerde= 'Mayor igual a 90%';
        $tableroControl->iniciativas= 'Definir claramente el Plan de acción para cada Proceso.';
        $tableroControl->responsable= 'Gerente General';
        $tableroControl->save();

        //VRAMDOMMMMMMMMMMMMMMMMMMMMMM

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 4;
        $tableroControl->objetivo= 'Aumentar la rentabilidad';
        $tableroControl->metaRojo= 'Menor a 20%';
        $tableroControl->metaAmarillo= 'Entre 20% y 50% ';
        $tableroControl->metaVerde= 'Mayor a 50%';
        $tableroControl->iniciativas= '- Iniciar estrategias de planificación- Elaborar presupuesto para las campañas- Implementar el plan de Marketing';
        $tableroControl->responsable= 'Jefe de Marketing';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 5;
        $tableroControl->objetivo= 'Evaluar estrategias de marketing';
        $tableroControl->metaRojo= 'Menor de 20%';
        $tableroControl->metaAmarillo= 'Entre 20%-30%';
        $tableroControl->metaVerde= 'Mayor a 30%';
        $tableroControl->iniciativas= '- Definir las estrategias de marketing - Establecer las metas de la campaña publicitaria ';
        $tableroControl->responsable= 'Jefe de Marketing  ';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 6;
        $tableroControl->objetivo= 'Captar y retener nuevos clientes';
        $tableroControl->metaRojo= 'Mayor a 8';
        $tableroControl->metaAmarillo= 'Entre 8 y 5 ';
        $tableroControl->metaVerde= 'Menor a 5';
        $tableroControl->iniciativas= '- Conocer las necesidades de los clientes que se quieren cubrir.- Elaborar una propuesta base- Implementar el plan de Marketing';
        $tableroControl->responsable= 'Jefe de Marketing  ';
        $tableroControl->save();

        //KARLA

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 7;
        $tableroControl->objetivo= 'Ampliar el nivel de confianza de los usuarios';
        $tableroControl->metaRojo= 'Menor a 8%';
        $tableroControl->metaAmarillo= 'Entre 8% y 15%';
        $tableroControl->metaVerde= 'Mayor a 15%';
        $tableroControl->iniciativas= '- Reducir perdidas de materia prima.Implementar plan de calidad.';
        $tableroControl->responsable= 'Asistente de calidad  ';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 8;
        $tableroControl->objetivo= 'Aumentar la rentabilidad';
        $tableroControl->metaRojo= 'Menor a 15%';
        $tableroControl->metaAmarillo= 'Entre 15% y 20%';
        $tableroControl->metaVerde= 'Mayor a 20%';
        $tableroControl->iniciativas= 'Recepción oportuna de la mercadería en almacenes. Incrementar la disponibilidad de materia prima. ';
        $tableroControl->responsable= 'Jefe de Logística';
        $tableroControl->save();

         $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 9;
        $tableroControl->objetivo= 'Aumentar la rentabilidad';
        $tableroControl->metaRojo= 'Menor a 5%';
        $tableroControl->metaAmarillo= 'Entre 5% y 10%';
        $tableroControl->metaVerde= 'Mayor a 10%';
        $tableroControl->iniciativas= 'Tener el acopio con materia prima disponible para la elaboración del producto. Almacenamiento apropiado de la materia prima para la fabricación del producto.';
        $tableroControl->responsable= 'Jefe de Almacén';
        $tableroControl->save();

        //STEFAMIIII

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 10;
        $tableroControl->objetivo= 'Incrementar satisfacción del cliente ';
        $tableroControl->metaRojo= 'Menos de 30%';
        $tableroControl->metaAmarillo= 'Entre 30% y 50%';
        $tableroControl->metaVerde= 'Mayor al 50%';
        $tableroControl->iniciativas= 'Realizar seguimiento a vendedores, realizar encuestas de satisfacción al cliente';
        $tableroControl->responsable= 'Superintendente de calidad';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 11;
        $tableroControl->objetivo= 'Realizar seguimiento y control de los productos en proceso.  ';
        $tableroControl->metaRojo= 'Más de 30%';
        $tableroControl->metaAmarillo= 'Entre 10% y 30%';
        $tableroControl->metaVerde= 'Menos de 10%';
        $tableroControl->iniciativas= 'Programa de identificación de mejora continua de procesos, programa de verificación y control del cumplimiento de técnicas de calidad  ';
        $tableroControl->responsable= 'Superintendente de calidad ';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 12;
        $tableroControl->objetivo= 'Reducir producto que no cumple el control de calidad';
        $tableroControl->metaRojo= 'Menos de 30%';
        $tableroControl->metaAmarillo= 'Entre 30% y 40%';
        $tableroControl->metaVerde= 'Mayor de 40%';
        $tableroControl->iniciativas= 'Crear plan de seguimiento de resultados, crear plan de reasignación de procesos, revisar las inconsistencias y buscar si existe una solución.';
        $tableroControl->responsable= 'Superintendente de calidad ';
        $tableroControl->save();


        //FATIMA

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 13;
        $tableroControl->objetivo= 'Almacenar materiales de buena calidad';
        $tableroControl->metaRojo= 'Menor a 80%';
        $tableroControl->metaAmarillo= 'Entre 80% y 90%';
        $tableroControl->metaVerde= 'Mayor a 90%';
        $tableroControl->iniciativas= 'Verificar la cantidad y calidad de los materiales recibidos. Conteo adecuado de los materiales para almacenar y devolver.';
        $tableroControl->responsable= 'Jefe de Almacen';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 14;
        $tableroControl->objetivo= 'Reducir los costes de almacenamiento.';
        $tableroControl->metaRojo= 'Menor a 20%';
        $tableroControl->metaAmarillo= 'Entre 20% y 40%';
        $tableroControl->metaVerde= 'Mayor a 40%';
        $tableroControl->iniciativas= 'Supervisar el inventario de los materiales en los almacenes. Conteo adecuado de los materiales almacenados.';
        $tableroControl->responsable= 'Asistente de almacen';
        $tableroControl->save();

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= 15;
        $tableroControl->objetivo= 'Aprovechar adecuadamente el espacio del almacen';
        $tableroControl->metaRojo= 'Menor a 20%';
        $tableroControl->metaAmarillo= 'Entre 20% y 40%';
        $tableroControl->metaVerde= 'Mayor a 40%';
        $tableroControl->iniciativas= 'Optimizar el uso del almacen. Implementar medidas de ampliacion de capacidad para el almacen';
        $tableroControl->responsable= 'Asistente de almacen';
        $tableroControl->save();


    }
}
