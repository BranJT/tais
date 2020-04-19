<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UnidadNegocio;

class UnidadNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
    {
        $uNegocios = UnidadNegocio::where('empresa_id',$empresa_id)->orderBy('created_at', 'desc')->get();
        return view('uNegocio.index',compact('uNegocios','empresa_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id)
    {
        return view('uNegocio.create', compact('empresa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $empresa_id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $UnidadNegocio = new UnidadNegocio;
        $UnidadNegocio->empresa_id= $empresa_id;
        $UnidadNegocio->nombre= $request->input('nombre');
        $UnidadNegocio->descripcion= $request->input('descripcion');
        $UnidadNegocio->save();

        return redirect()->route('uNegocio_index', ['empresa_id' => $empresa_id])->with('success','Unidad de Negocio Creada');
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
        $uNegocio= UnidadNegocio::find($id);
        $empresa_id= $uNegocio->empresa_id;
        return view('uNegocio.edit',compact('uNegocio','empresa_id'));
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
            'descripcion' => 'required'
        ]);
        $empresa_id = $request->input('empresa_id');
        $UnidadNegocio = UnidadNegocio::find($id);
        $UnidadNegocio->empresa_id= $empresa_id;
        $UnidadNegocio->nombre= $request->input('nombre');
        $UnidadNegocio->descripcion= $request->input('descripcion');
        $UnidadNegocio->save();

        return redirect()->route('uNegocio_index', ['empresa_id' => $empresa_id])->with('success','Unidad de Negocio ACtualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 123;
    }
}
