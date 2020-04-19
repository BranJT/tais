@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Mapa de Procesos
                    <a href="/empresa/{{$empresa_id}}/uNegocio" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Listado de mapas
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/mapa/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Mapa de proceso
                    </a>                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha Creado</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($mapas as $mapa)
                            <tr data-id="{{ $mapa->id }}">
                                <td>{{ $mapa->id}}</td>                                
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/mapa/{{$mapa->id}}">
                                        {{ $mapa->nombre }}
                                    </a>
                                </td>
                                <td>{{ $mapa->created_at->toDateString() }}</td>
                                <td>
                                    <a href="/mapa/edit/{{$mapa->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['MapaController@destroy' , $mapa->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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