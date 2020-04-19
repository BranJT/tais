<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MatrizPriorizacion;
use App\Model\MapaProceso;
use App\Model\MapaDetalle;
use App\Model\MatrizParametro;
use App\Model\MatrizProceso;
use App\Model\MatrizDetalle;
use App\Model\Proceso;
use Illuminate\Support\Facades\DB;
use PDF;
class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id,$uNegocio_id)
    {
        $matrices = MatrizPriorizacion::where([
            ['empresa_id',$empresa_id],
            ['unidad_negocio_id',$uNegocio_id]
        ])->orderBy('created_at', 'desc')->get();
        return view('matriz.index',compact('matrices','empresa_id','uNegocio_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id,$uNegocio_id)
    {
        $mapas = MapaProceso::where([
            ['empresa_id',$empresa_id],
            ['unidad_negocio_id',$uNegocio_id]
        ])->get();
        return view('matriz.create', compact('empresa_id','uNegocio_id','mapas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$empresa_id,$uNegocio_id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'mapa' => 'required'
        ]);

        $matriz = new MatrizPriorizacion;
        $matriz->empresa_id= $empresa_id;
        $matriz->unidad_negocio_id= $uNegocio_id;
        $matriz->mapa_proceso_id= $request->input('mapa');
        $matriz->nombre= $request->input('nombre');
        $matriz->save();        

        return redirect()->route('matriz_index', ['empresa_id' => $empresa_id,'uNegocio_id' => $uNegocio_id ])->with('success','Matriz de Priorizacion Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($empresa_id,$uNegocio_id,$id)
    {
        $matriz= MatrizPriorizacion::find($id);
        //$mapaDetalles = MapaDetalle::where('mapa_proceso_id',$matriz->mapa_proceso_id)->orderBy('id','desc')->get();
        $mapaDetalles =MatrizDetalle::select('proceso_id')->where('matriz_priorizacion_id',$id)->groupBy('proceso_id')->get();
        //$pesos1 = DB::table('matriz_detalle')->select('proceso_id')->where('matriz_priorizacion_id',$id)->groupBy('proceso_id')->get();
        $parametros= MatrizParametro::where('matriz_priorizacion_id',$id)->get();
        $procesosPriorizados = MatrizProceso::where('matriz_priorizacion_id',$id)->get();
        $pesos = MatrizDetalle::where('matriz_priorizacion_id',$id)->orderBy('id','asc')->get();
        return view('matriz.show',compact('empresa_id','uNegocio_id','matriz','mapaDetalles','parametros','procesosPriorizados','pesos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;
        return view('matriz.edit', compact('empresa_id','uNegocio_id','id','matriz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required'
        ]);
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;
        $matriz->nombre = $request->input('nombre');
        $matriz->save();        

        return redirect()->route('matriz_index', ['empresa_id' => $empresa_id,'uNegocio_id' => $uNegocio_id ])->with('success','Matriz de Priorizacion Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function parametro($empresa_id,$id)
    {
        $parametros = MatrizParametro::where('matriz_priorizacion_id',$id)->get();
        $matriz = MatrizPriorizacion::find($id);
        $uNegocio_id=$matriz->unidad_negocio_id;
        return view('matriz.indexParametro',compact('parametros','empresa_id','id','uNegocio_id'));
    }         

    public function createParametro($empresa_id,$id)
    {        
        return view('matriz.createParametro',compact('empresa_id','id'));
    }
    public function storeParametro(Request $request,$empresa_id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'descripcion' => 'required',
            'peso' => 'required'
        ]);

        $parametro = new MatrizParametro;
        $matriz_priorizacion_id= $request->input('matriz_priorizacion_id');
        $parametro->matriz_priorizacion_id= $matriz_priorizacion_id;
        $parametro->nombre= $request->input('nombre');
        $parametro->descripcion= $request->input('descripcion');
        $parametro->peso= $request->input('peso');
        $parametro->save();        

        return redirect()->route('parametro_index', ['empresa_id' => $empresa_id, 'id' => $matriz_priorizacion_id])->with('success','Parametro Creado');
    }


    public function editProceso($id)
    {
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;
        $mapaDetalles = MapaDetalle::where('mapa_proceso_id',$matriz->mapa_proceso_id)->orderBy('id','desc')->get();
        return view('matriz.editProceso',compact('empresa_id','uNegocio_id','id','mapaDetalles'));
    }
    public function updateProceso(Request $request,$id)
    {        
        $matriz= MatrizPriorizacion::find($id);

        $mapaID= $matriz->mapa_proceso_id;
        $mapaDetalles = MapaDetalle::where('mapa_proceso_id',$mapaID)->get();

        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;

        DB::table('matriz_proceso')->where('matriz_priorizacion_id', $id)->delete();

        $procesos= $request->input('procesos');
        //$idprocesos= $request->input('idprocesos');
        if(sizeof($procesos)!=0)
        {
            $contador=0;
            foreach($procesos as $proceso)
            {
                $proceso123=Proceso::find($procesos[$contador]);
                $matrizProceso = new MatrizProceso;
                $matrizProceso->matriz_priorizacion_id = $id;
                $matrizProceso->proceso_id= $procesos[$contador];
                $matrizProceso->nombre= $proceso123->nombre;
                $matrizProceso->save();
                $contador++;

            }

            foreach($mapaDetalles as $mapaDetalle)
            {
                foreach($procesos as $proceso)
                {
                    if($mapaDetalle->proceso_id == $proceso){
                        $mapaDetalle->estado= 'priorizado';
                        $mapaDetalle->save();
                        break;
                    }else{
                        $mapaDetalle->estado= 'nada';
                        $mapaDetalle->save();
                    }
                }
                
            }
        }

        
        return redirect()->route('matriz_show', ['empresa_id' => $empresa_id, 'uNegocio_id' => $uNegocio_id , 'id' => $id])->with('success','Procesos Priorizados Actualizados');
    }

    public function editMatriz($id)
    {
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;

        //$mapaDetalles = MapaDetalle::where('mapa_proceso_id',$matriz->mapa_proceso_id)->orderBy('id')->get();
        $mapaDetalles =MatrizDetalle::select('proceso_id')->where('matriz_priorizacion_id',$id)->groupBy('proceso_id')->get();
        $parametros= MatrizParametro::where('matriz_priorizacion_id',$id)->get();

        return view('matriz.editMatriz' ,compact('empresa_id','uNegocio_id','id','matriz','mapaDetalles','parametros'));
    }

    public function updateMatriz(Request $request,$id)
    {
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;

        //$mapaDetalles = MapaDetalle::where('mapa_proceso_id',$matriz->mapa_proceso_id)->orderBy('id','desc')->get();
        $mapaDetalles =MatrizDetalle::select('proceso_id')->where('matriz_priorizacion_id',$id)->groupBy('proceso_id')->get();
        $parametros= MatrizParametro::where('matriz_priorizacion_id',$id)->get();

        DB::table('matriz_detalle')->where('matriz_priorizacion_id', $id)->delete();

        $pesos= $request->input('peso');
        $contador=0;
        foreach($mapaDetalles as $mapaDetalle)
        {
            foreach($parametros as $parametro)
            {

                $matrizDetalle = new MatrizDetalle();
                $matrizDetalle->matriz_priorizacion_id=$id;
                $matrizDetalle->proceso_id=$mapaDetalle->proceso_id;
                $matrizDetalle->matriz_parametro_id=$parametro->id;
                $matrizDetalle->puntaje=$pesos[$contador];
                $matrizDetalle->save();
                $contador++;

            }
        }

        return redirect()->route('matriz_show', ['empresa_id' => $empresa_id, 'uNegocio_id' => $uNegocio_id , 'id' => $id])->with('success','Pesos Actualizados');
    }

    public function pdf($id)
    {
        $matriz= MatrizPriorizacion::find($id);
        $empresa_id = $matriz->empresa_id;
        $uNegocio_id = $matriz->unidad_negocio_id;
        $mapaDetalles = MapaDetalle::where('mapa_proceso_id',$matriz->mapa_proceso_id)->orderBy('id','desc')->get();
        $parametros= MatrizParametro::where('matriz_priorizacion_id',$id)->get();
        $procesosPriorizados = MatrizProceso::where('matriz_priorizacion_id',$id)->get();
        $pesos = MatrizDetalle::where('matriz_priorizacion_id',$id)->get();

        $pdf = PDF::loadView('matriz.matrizPDF', compact('empresa_id','uNegocio_id','matriz','mapaDetalles','parametros','procesosPriorizados','pesos'));
        return $pdf->download('matrizPDF.pdf');
    }

    public function pdfParametro($id)
    {
        $parametros = MatrizParametro::where('matriz_priorizacion_id',$id)->get();
        $matriz = MatrizPriorizacion::find($id);
        $uNegocio_id=$matriz->unidad_negocio_id;
        
        $pdf = PDF::loadView('matriz.parametroPDF', compact('parametros','empresa_id','id','uNegocio_id'));
        return $pdf->download('parametroPDF.pdf');
    }
}
