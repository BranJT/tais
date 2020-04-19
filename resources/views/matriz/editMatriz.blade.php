@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Matriz de Priorizacion<a href="/empresa/{{$id}}/uNegocio/{{$uNegocio_id}}/matriz/{{$id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Agregar peso a los procesos
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MatrizController@updateMatriz',$id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <table class="table table-bordered table-striped">              
                    <tr>
                        <td>Descripcion</td>
                        <td>Influencia casi nula</td>
                        <td>Poca influencia</td>
                        <td>Influencia normal</td>
                        <td>Influencia moderada</td>
                        <td>Influencia alta</td>
                    </tr>
                    <tr>
                        <td>Descripcion</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    </table>
                            <table class="table table-bordered">
                            <tr>
                                <th>Nombre</th>
                                @foreach($parametros as $parametro)
                                    <th>{{$parametro->nombre}}</th>
                                @endforeach
                                
                            </tr>

                            <tr>
                                <td>Peso</td>
                                @foreach($parametros as $parametro)
                                <td>{{$parametro->peso}}</td>
                                @endforeach
                            </tr>

                    @foreach($objetivos as $objetivo)
                            <tr>    
                                <td>{{ $objetivo->descripcion }} </td>
                                @foreach($parametros as $parametro)
                                    <td>
                                        {{Form::select('peso[]', ['1' => '1' ,'2' => '2' ,'3' => '3' ,'4' => '4' ,'5' => '5' ,],['class' => 'form-control'])}}
                                    </td>
                                @endforeach
                                
                            </tr>
                    @endforeach
                            </table>

			        {{Form::hidden('_method','PUT')}}
                    {{Form::hidden('empresa_id',$id)}}                 
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection