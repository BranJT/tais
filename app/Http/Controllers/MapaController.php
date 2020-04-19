<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MapaProceso;
use App\Model\MapaDetalle;
use App\Model\Subproceso;
use Illuminate\Support\Facades\DB;
use PDF;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id,$uNegocio_id)
    {
        $mapas = MapaProceso::where([
            ['empresa_id',$empresa_id],
            ['unidad_negocio_id',$uNegocio_id],
        ])->orderBy('created_at', 'desc')->get();
        return view('mapa.index',compact('mapas','empresa_id','uNegocio_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id,$uNegocio_id)
    {
        $procesos1 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','estrategico'],
        ])->get();
        $procesos2 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','primario'],
        ])->get();
        $procesos3 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','apoyo'],
        ])->get();
        return view('mapa.create',compact('empresa_id','uNegocio_id' ,'procesos1','procesos2','procesos3'));
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
            'entrada' => 'required',
            'salida' => 'required'
        ]);

        $mapaProceso = new MapaProceso;
        $mapaProceso->empresa_id= $empresa_id;
        $mapaProceso->unidad_negocio_id= $uNegocio_id;
        $mapaProceso->nombre= $request->input('nombre');
        $mapaProceso->entrada= $request->input('entrada');
        $mapaProceso->salida= $request->input('salida');
        $mapaProceso->save();
        $procesos= $request->input('procesos');
        foreach($procesos as $proceso){
            $mapaDetalle = new MapaDetalle;
            $mapaDetalle->mapa_proceso_id = $mapaProceso->id;
            $mapaDetalle->proceso_id= $proceso;  
            $mapaDetalle->save();
        }

        return redirect()->route('mapa_index', ['empresa_id' => $empresa_id, 'uNegocio_id' => $uNegocio_id])->with('success','Mapa de Procesos Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($empresa_id,$uNegocio_id,$id)
    {
        $mapa= MapaProceso::find($id);
        $mapaDetalles = MapaDetalle::where('mapa_proceso_id',$id)->get();
        $subprocesos = Subproceso::all();
        return view('mapa.show',compact('empresa_id','uNegocio_id','mapa','mapaDetalles','subprocesos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapa=MapaProceso::find($id);
        $empresa_id=$mapa->empresa_id;
        $uNegocio_id=$mapa->unidad_negocio_id;
        $procesos1 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','estrategico'],
        ])->get();
        $procesos2 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','primario'],
        ])->get();
        $procesos3 = DB::table('proceso')->where([
            ['empresa_id',$empresa_id],
            ['tipo','apoyo'],
        ])->get();
        return view('mapa.edit',compact('empresa_id','uNegocio_id' ,'mapa', 'procesos1','procesos2','procesos3'));
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
            'nombre' => 'required',
            'entrada' => 'required',
            'salida' => 'required'
        ]);

        $mapaProceso = MapaProceso::find($id);
        $empresa_id= $request->input('empresa_id');
        $uNegocio_id = $mapaProceso->unidad_negocio_id;
        $mapaProceso->empresa_id= $empresa_id;
        $mapaProceso->nombre= $request->input('nombre');
        $mapaProceso->entrada= $request->input('entrada');
        $mapaProceso->salida= $request->input('salida');
        $mapaProceso->save();
        
        DB::table('mapa_detalle')->where('mapa_proceso_id', $id)->delete();

        $procesos= $request->input('procesos');
        if(sizeof($procesos)!=0)
        {
            foreach($procesos as $proceso)
            {

                $mapaDetalle = new MapaDetalle;
                $mapaDetalle->mapa_proceso_id = $mapaProceso->id;
                $mapaDetalle->proceso_id= $proceso;  
                $mapaDetalle->save();
            }
        }

        return redirect()->route('mapa_index', ['empresa_id' => $empresa_id, 'uNegocio_id' => $uNegocio_id,])->with('success','Mapa de Procesos Actualizado');
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

    public function pdf($id)
    {
        $mapa= MapaProceso::find($id);
        $empresa_id = $mapa->empresa_id;
        $uNegocio_id = $mapa->unidad_negocio_id;
        $mapaDetalles = MapaDetalle::where('mapa_proceso_id',$id)->get();
        $subprocesos = Subproceso::where('proceso_id',1)->get();

        $pdf = PDF::loadView('mapa.mapaPDF', compact('empresa_id','uNegocio_id','mapa','mapaDetalles','subprocesos'));
        return $pdf->download('mapaPDF.pdf');
    }
}
