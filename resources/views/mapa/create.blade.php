@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mapa de Procesos<a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/mapa/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Crear un nuevo mapa de Proceso 
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MapaController@store',$empresa_id ,$uNegocio_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			    	<div class="form-group">
			    		{{Form::label('nombre', 'Nombre')}}
			    		{{Form::text('nombre', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
			    	</div>

                    <div class="form-group">
                        {{Form::label('entrada', 'Entradas del mapa')}}
                        {{Form::text('entrada', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('salida', 'Salidas del Mapa')}}
                        {{Form::text('salida', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('procesos1', 'Procesos Estrategicos :')}}
                        <br>
                        @foreach($procesos1 as $proceso1)
                            {{Form::label( $proceso1->nombre, $proceso1->nombre)}}
                            {{Form::checkbox('procesos[]', $proceso1->id) }}
                            <br>
                        @endforeach
                    </div>

                    <div class="form-group">
                        {{Form::label('procesos2', 'Procesos Primarios :')}}
                        <br>
                        @foreach($procesos2 as $proceso2)
                            {{Form::label( $proceso2->nombre, $proceso2->nombre)}}
                            {{Form::checkbox('procesos[]', $proceso2->id) }}
                            <br>
                        @endforeach
                    </div>

                    <div class="form-group">
                        {{Form::label('procesos3', 'Procesos de Apoyo :')}}
                        <br>
                        @foreach($procesos3 as $proceso3)
                            {{Form::label( $proceso3->nombre, $proceso3->nombre)}}
                            {{Form::checkbox('procesos[]', $proceso3->id) }}
                            <br>
                        @endforeach
                    </div>

			        
                    {{Form::hidden('empresa_id',$empresa_id)}}                 
			    	{{Form::submit('Crear',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection