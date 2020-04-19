<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Empresa;
use App\Model\Proveedor;
use App\Model\Cliente;
use PDF;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'imagen' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('imagen')){
            //Get file name with the extension
            $filenameWithExt= $request->file('imagen')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension= $request->file('imagen')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //uploadImage
            $path =$request->file('imagen')->storeAs('public/images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $empresa = new Empresa;
        $empresa->nombre= $request->input('nombre');
        $empresa->imagen= $fileNameToStore;    

        $empresa->save();

        return redirect('/')->with('success','Empresa Creada');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa= Empresa::find($id);
        $empresa_id= $empresa->id;
        $proveedores= Proveedor::where('empresa_id',$empresa_id)->orderBy('nivel','asc')->get();
        $consumidores= Cliente::where('empresa_id',$empresa_id)->orderBy('nivel','asc')->get();

        // LLeno la empresa: el que esta almedio
        $respuesta["cadena"]=array();
        $respuesta["cadena"][0]["key"]="Root";
        $respuesta["cadena"][0]["color"]="lavgrad";
        if($empresa->imagen != "noimage.jpg"){
            $respuesta["cadena"][0]["source"] = "http://localhost/tais/public/storage/images/".$empresa->imagen;
        }
        else{
            $respuesta["cadena"][0]["name"]=$empresa->nombre;
        }
        // lleno la parte izquierda
        $p=1;
        foreach($proveedores as $proveedor){
            if($proveedor->dependencia==0){
                $respuesta["cadena"][$p]["key"]=$proveedor->id;
                $respuesta["cadena"][$p]["parent"]="Root";
                $respuesta["cadena"][$p]["dir"]="left";
                if($proveedor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p]["source"] = "http://localhost/tais/public/storage/images/".$proveedor->imagen;
                }
                else{
                    $respuesta["cadena"][$p]["name"]=$proveedor->nombre;
                }    
            }else{
                $respuesta["cadena"][$p]["key"]=$proveedor->id;
                $respuesta["cadena"][$p]["parent"]=$proveedor->dependencia;
                if($proveedor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p]["source"] = "http://localhost/tais/public/storage/images/".$proveedor->imagen;
                }
                else{
                    $respuesta["cadena"][$p]["name"]=$proveedor->nombre;
                } 
            }
            $p++;
            
        }
        $c=0;
        foreach($consumidores as $consumidor){
            if($consumidor->dependencia==0){
                $respuesta["cadena"][$p+$c]["key"]=$consumidor->id;
                $respuesta["cadena"][$p+$c]["parent"]="Root";
                $respuesta["cadena"][$p+$c]["dir"]="right";
                if($consumidor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p+$c]["source"] = "http://localhost/tais/public/storage/images/".$consumidor->imagen;
                }
                else{
                    $respuesta["cadena"][$p+$c]["name"]=$consumidor->nombre;
                }    
            }else{
                $respuesta["cadena"][$p+$c]["key"]=$consumidor->id;
                $respuesta["cadena"][$p+$c]["parent"]=$consumidor->dependencia;
                if($consumidor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p+$c]["source"] = "http://localhost/tais/public/storage/images/".$consumidor->imagen;
                }
                else{
                    $respuesta["cadena"][$p+$c]["name"]=$consumidor->nombre;
                }
            }
            $c++;
            
        }        

        return view('empresa.show',compact('empresa','proveedores','respuesta'));
        
    }
    public function principal($id)
    {
        $empresa= Empresa::find($id);
        return view('empresa.show')->with('empresa',$empresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= Empresa::find($id);
        $empresa_id= $empresa->id;
        return view('empresa.edit',compact('empresa','empresa_id')); 
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
            'imagen' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('imagen')){
            //Get file name with the extension
            $filenameWithExt= $request->file('imagen')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension= $request->file('imagen')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //uploadImage
            $path =$request->file('imagen')->storeAs('public/images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $empresa = Empresa::find($id);
        $empresa->nombre= $request->input('nombre');
        if($request->hasFile('imagen')){
            $empresa->imagen=$fileNameToStore;
        }   

        $empresa->save();

        return redirect('/')->with('success','Empresa Modificada');
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
        $empresa= Empresa::find($id);
        $empresa_id= $empresa->id;
        $proveedores= Proveedor::where('empresa_id',$empresa_id)->orderBy('nivel','asc')->get();
        $consumidores= Cliente::where('empresa_id',$empresa_id)->orderBy('nivel','asc')->get();

        // LLeno la empresa: el que esta almedio
        $respuesta["cadena"]=array();
        $respuesta["cadena"][0]["key"]="Root";
        $respuesta["cadena"][0]["color"]="lavgrad";
        if($empresa->imagen != "noimage.jpg"){
            $respuesta["cadena"][0]["source"] = "http://localhost/tais/public/storage/images/".$empresa->imagen;
        }
        else{
            $respuesta["cadena"][0]["name"]=$empresa->nombre;
        }
        // lleno la parte izquierda
        $p=1;
        foreach($proveedores as $proveedor){
            if($proveedor->dependencia==0){
                $respuesta["cadena"][$p]["key"]=$proveedor->id;
                $respuesta["cadena"][$p]["parent"]="Root";
                $respuesta["cadena"][$p]["dir"]="left";
                if($proveedor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p]["source"] = "http://localhost/tais/public/storage/images/".$proveedor->imagen;
                }
                else{
                    $respuesta["cadena"][$p]["name"]=$proveedor->nombre;
                }    
            }else{
                $respuesta["cadena"][$p]["key"]=$proveedor->id;
                $respuesta["cadena"][$p]["parent"]=$proveedor->dependencia;
                if($proveedor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p]["source"] = "http://localhost/tais/public/storage/images/".$proveedor->imagen;
                }
                else{
                    $respuesta["cadena"][$p]["name"]=$proveedor->nombre;
                } 
            }
            $p++;
            
        }
        $c=0;
        foreach($consumidores as $consumidor){
            if($consumidor->dependencia==0){
                $respuesta["cadena"][$p+$c]["key"]=$consumidor->id;
                $respuesta["cadena"][$p+$c]["parent"]="Root";
                $respuesta["cadena"][$p+$c]["dir"]="right";
                if($consumidor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p+$c]["source"] = "http://localhost/tais/public/storage/images/".$consumidor->imagen;
                }
                else{
                    $respuesta["cadena"][$p+$c]["name"]=$consumidor->nombre;
                }    
            }else{
                $respuesta["cadena"][$p+$c]["key"]=$consumidor->id;
                $respuesta["cadena"][$p+$c]["parent"]=$consumidor->dependencia;
                if($consumidor->imagen != "noimage.jpg"){
                    $respuesta["cadena"][$p+$c]["source"] = "http://localhost/tais/public/storage/images/".$consumidor->imagen;
                }
                else{
                    $respuesta["cadena"][$p+$c]["name"]=$consumidor->nombre;
                }
            }
            $c++;
            
        }

        $pdf = PDF::loadView('empresa.cadenaPDF', compact('empresa','proveedores','respuesta'));
        return $pdf->download('cadenaPDF.pdf');
    }
}
