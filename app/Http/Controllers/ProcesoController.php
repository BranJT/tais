<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proceso;
use App\Model\Subproceso;
use Illuminate\Support\Facades\DB;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
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
        return view('proceso.index', compact('procesos1','procesos2','procesos3','empresa_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id)
    {
        return view('proceso.create',compact('empresa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$empresa_id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'tipo' => 'required'
        ]);

        $proceso = new Proceso;
        $proceso->empresa_id= $empresa_id;
        $proceso->nombre= $request->input('nombre');
        $proceso->tipo= $request->input('tipo'); 

        $proceso->save();

        return redirect()->route('proceso_index', ['empresa_id' => $empresa_id])->with('success','Proceso Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceso= Proceso::find($id);
        $empresa_id= $proceso->empresa_id;
        return view('proceso.edit',compact('proceso','empresa_id'));
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
            'tipo' => 'required'
        ]);

        $proceso = Proceso::find($id);
        $proceso->empresa_id= $request->input('empresa_id');
        $proceso->nombre= $request->input('nombre');
        $proceso->tipo= $request->input('tipo');

        $proceso->save();

        return redirect()->route('proceso_index', ['empresa_id' => $proceso->empresa_id])->with('success','Proceso Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proceso = Proceso::find($id);
        $empresa_id=$proceso->empresa_id;
        $listaSubprocesos = Subproceso::where('proceso_id',$id)->get();
        if($listaSubprocesos->count() == 0){
            $proceso->delete();
            return redirect()->route('proceso_index', ['empresa_id' => $empresa_id])->with('success','Proveedor Eliminado');
        }
        else
        {
            return redirect()->route('proceso_index', ['empresa_id' => $empresa_id])->with('error','No se puede eliminar el elemento seleccionado: Cuenta con uno o mas subprocesos relacionados');
        }
            
    }
}
