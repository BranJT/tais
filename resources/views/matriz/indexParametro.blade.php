@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Parametros
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/{{$id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Listado de parametros

                    <a href="/empresa/{{$empresa_id}}/matriz/{{$id}}/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Parametro
                    </a>
                    <a href="/pdf/parametro/{{$id}}" class="btn btn-default" style="float:right; margin-right:10px">Exportar PDF</a>               
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Peso</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($parametros as $parametro)
                            <tr data-id="{{ $parametro->id }}">
                                <td>{{ $parametro->id}}</td> 
                                <td>{{ $parametro->nombre}}</td>                            
                                <td>{{ $parametro->descripcion}}</td>
                                <td>{{ $parametro->peso}}</td>
                                <td>
                                    <a href="/matriz/editParametro/{{$parametro->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['MatrizController@destroyParametro' , $parametro->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                 </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection