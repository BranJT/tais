@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Procesos a Priorizar<a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/{{$id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Definir procesos a priorizar
                </div>
                <div class="well">
				{!! Form::open(['action' => ['MatrizController@updateProceso',$id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}			    	

                    <div class="form-group">
                        {{Form::label('procesos', 'Seleccione Procesos a Priorizar :')}}
                        <br>
                        @foreach($mapaDetalles as $mapaDetalle)
                            {{Form::label( $mapaDetalle->getProceso()->nombre, $mapaDetalle->getProceso()->nombre)}}
                            {{Form::checkbox('procesos[]', $mapaDetalle->getProceso()->id) }}
                            <br>
                        @endforeach
                    </div>                  
			        
                    {{Form::hidden('empresa_id',$empresa_id)}} 
                    {{Form::hidden('_method', 'PUT')}}
			    	{{Form::submit('Priorizar',['class' =>'btn btn-primary'])}}
				{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection