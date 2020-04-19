@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Proceso
                    <a href="/empresa/{{$empresa_id}}" style="float:right;">Volver</a>
                	
                </div>
                <div class="panel-body">
                    Lista de procesos
                    <a href="/empresa/{{$empresa_id}}/proceso/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Proceso
                    </a>
                </div>
                <p>Procesos Estrategicos</p>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($procesos1 as $proceso1)
                            <tr data-id="{{ $proceso1->id }}">
                                <td>{{ $proceso1->id}}</td>
                                <td>{{ $proceso1->nombre }}</td>
                                <td>{{ $proceso1->tipo }}</td>
                                <td>
                                    <a href="/proceso/edit/{{$proceso1->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoController@destroy' , $proceso1->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <p>Procesos primarios</p>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($procesos2 as $proceso2)
                            <tr data-id="{{ $proceso2->id }}">
                                <td>{{ $proceso2->id}}</td>
                                <td>{{ $proceso2->nombre }}</td>
                                <td>{{ $proceso2->tipo }}</td>
                                <td>
                                    <a href="/proceso/edit/{{$proceso2->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoController@destroy' , $proceso2->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <p>Procesos de Apoyo</p>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($procesos3 as $proceso3)
                            <tr data-id="{{ $proceso3->id }}">
                                <td>{{ $proceso3->id}}</td>
                                <td>{{ $proceso3->nombre }}</td>
                                <td>{{ $proceso3->tipo }}</td>
                                <td>
                                    <a href="/proceso/edit/{{$proceso3->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoController@destroy' , $proceso3->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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