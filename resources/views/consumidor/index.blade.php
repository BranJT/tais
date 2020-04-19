@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Consumidor
                    <a href="/empresa/{{$empresa_id}}" style="float:right;">Volver</a>
                	
                </div>
                <div class="panel-body">
                    Lista de consumidores
                    <a href="/empresa/{{$empresa_id}}/consumidor/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Consumidor
                    </a>
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>RUC</th>
                            <th>Imagen</th>
                            <th>Nivel</th>
                            <th>Dependencia</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($consumidores as $consumidor)
                            <tr data-id="{{ $consumidor->id }}">
                                <td>{{ $consumidor->id}}</td>
                                <td>{{ $consumidor->nombre }}</td>
                                <td>{{ $consumidor->ruc }}</td>
                                <td align="center"><img style="width:100px" src="/storage/images/{{$consumidor->imagen}}"></td>
                                <td>{{ $consumidor->nivel }}</td>
                                <td>
                                    @if($consumidor->dependencia==0)
                                        {{'Empresa'}}
                                    @else
                                        {{$consumidor->dependencia}}    
                                    @endif
                                </td>
                                <td>                                    
                                    {!!Form::open(['action'=>['ConsumidorController@destroy' , $consumidor->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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